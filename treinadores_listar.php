<?php

include_once 'conn.php';

$dados_requisicao = $_REQUEST;

$colunas = [
    0 => 'apelido',
    1 => 'situacao',
    2 => 'treinador',
    3 => 'estados',
    4 => 'idade',
];

$query_qnt_treinadores = "SELECT COUNT(id_treinadores) AS qnt_treinadores FROM treinadores";
$result_qnt_treinadores = $conn->prepare($query_qnt_treinadores);
$result_qnt_treinadores->execute();
$row_qnt_treinadores = $result_qnt_treinadores->fetch(PDO::FETCH_ASSOC);


$query_treinadores = "SELECT id_treinadores, treinador, apelido, situacao, estados, YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dt_nascimento))) as idade
                  FROM treinadores"; 

if(!empty($dados_requisicao['search']['value'])){
    $query_treinadores .= " WHERE apelido LIKE :apelido ";
    $query_treinadores .= " OR situacao LIKE :situacao ";
    $query_treinadores .= " OR treinador LIKE :treinador ";
    $query_treinadores .= " OR estados LIKE :estados ";
}

$query_treinadores .= " ORDER BY " . $colunas[$dados_requisicao['order'][0]['column']] . " " . 
$dados_requisicao['order'][0]['dir'] . " LIMIT :inicio , :quantidade";
                   
$result_treinadores = $conn->prepare($query_treinadores);
$result_treinadores->bindParam(':inicio', $dados_requisicao['start'], PDO::PARAM_INT);
$result_treinadores->bindParam(':quantidade', $dados_requisicao['length'], PDO::PARAM_INT);

if(!empty($dados_requisicao['search']['value'])){
    $valor_pesquisa = "%" .  $dados_requisicao['search']['value'] . "%";
    $result_treinadores->bindParam(':apelido', $valor_pesquisa, PDO::PARAM_STR);
    $result_treinadores->bindParam(':situacao', $valor_pesquisa, PDO::PARAM_STR); 
    $result_treinadores->bindParam(':treinador', $valor_pesquisa, PDO::PARAM_STR); 
    $result_treinadores->bindParam(':estados', $valor_pesquisa, PDO::PARAM_STR); 
}

$result_treinadores->execute();

while($row_treinador = $result_treinadores->fetch(PDO::FETCH_ASSOC)){
    extract($row_treinador);
    $registro = [];
    $registro[] = $apelido;
    $registro[] = $situacao;
    $registro[] = $treinador;
    $registro[] = $estados;
    $registro[] = $idade. " anos";
    $dados_treinadores[] = $registro;
    
}

$resultado = [
    "draw" => intval($dados_requisicao['draw']),
    "recordsTotal" => intval($row_qnt_treinadores['qnt_treinadores']),
    "recordsFiltered" => intval($row_qnt_treinadores['qnt_treinadores']),
    "data" => $dados_treinadores
];

echo json_encode($resultado);
?>