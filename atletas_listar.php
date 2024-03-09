<?php

include_once 'conn.php';

$dados_requisicao = $_REQUEST;

$colunas = [
    0 => 'apelido',
    1 => 'posicao',
    2 => 'atleta',
    3 => 'paises',
    4 => 'idade',
];

$query_qnt_atletas = "SELECT COUNT(id_atletas) AS qnt_atletas FROM atletas";
$result_qnt_atletas = $conn->prepare($query_qnt_atletas);
$result_qnt_atletas->execute();
$row_qnt_atletas = $result_qnt_atletas->fetch(PDO::FETCH_ASSOC);


$query_atletas = "SELECT id_atletas, apelido, atleta, posicao, paises, YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dt_nascimento))) as idade FROM atletas";

if(!empty($dados_requisicao['search']['value'])){
    $query_atletas .= " WHERE apelido LIKE :apelido ";
    $query_atletas .= " OR posicao LIKE :posicao ";
    $query_atletas .= " OR atleta LIKE :atleta ";
    $query_atletas .= " OR paises LIKE :paises ";
}

$query_atletas .= " ORDER BY " . $colunas[$dados_requisicao['order'][0]['column']] . " " . 
$dados_requisicao['order'][0]['dir'] . " LIMIT :inicio , :quantidade";
                   
$result_atletas = $conn->prepare($query_atletas);
$result_atletas->bindParam(':inicio', $dados_requisicao['start'], PDO::PARAM_INT);
$result_atletas->bindParam(':quantidade', $dados_requisicao['length'], PDO::PARAM_INT);

if(!empty($dados_requisicao['search']['value'])){
    $valor_pesquisa = "%" .  $dados_requisicao['search']['value'] . "%";
    $result_atletas->bindParam(':apelido', $valor_pesquisa, PDO::PARAM_STR);
    $result_atletas->bindParam(':posicao', $valor_pesquisa, PDO::PARAM_STR);
    $result_atletas->bindParam(':atleta', $valor_pesquisa, PDO::PARAM_STR); 
    $result_atletas->bindParam(':paises', $valor_pesquisa, PDO::PARAM_STR); 
}

$result_atletas->execute();

while($row_atletas = $result_atletas->fetch(PDO::FETCH_ASSOC)){
    extract($row_atletas);
    $registro = [];
    $registro[] = $apelido;
    $registro[] = $posicao;
    $registro[] = $atleta;
    $registro[] = $paises;
    $registro[] = $idade . " anos";
    $dados_atletas[] = $registro;
    
}

$resultado = [
    "draw" => intval($dados_requisicao['draw']),
    "recordsTotal" => intval($row_qnt_atletas['qnt_atletas']),
    "recordsFiltered" => intval($row_qnt_atletas['qnt_atletas']),
    "data" => $dados_atletas
];

echo json_encode($resultado);
?> 

