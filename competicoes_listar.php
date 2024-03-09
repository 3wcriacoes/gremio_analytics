<?php

include_once 'conn.php';

$dados_requisicao = $_REQUEST;

$colunas = [
    0 => 'apelido',
    1 => 'organizador',
    2 => 'situacao',
];

$query_qnt_competicoes = "SELECT COUNT(id_competicoes) AS qnt_competicoes FROM competicoes";
$result_qnt_competicoes = $conn->prepare($query_qnt_competicoes);
$result_qnt_competicoes->execute();
$row_qnt_competicoes = $result_qnt_competicoes->fetch(PDO::FETCH_ASSOC);


$query_competicoes = "SELECT competicao, apelido, organizador, situacao FROM competicoes"; 

if(!empty($dados_requisicao['search']['value'])){
    $query_competicoes .= " WHERE apelido LIKE :apelido ";
    $query_competicoes .= " OR organizador LIKE :organizador ";
    $query_competicoes .= " OR situacao LIKE :situacao ";
}

$query_competicoes .= " ORDER BY " . $colunas[$dados_requisicao['order'][0]['column']] . " " . 
$dados_requisicao['order'][0]['dir'] . " LIMIT :inicio , :quantidade";
                   
$result_competicoes = $conn->prepare($query_competicoes);
$result_competicoes->bindParam(':inicio', $dados_requisicao['start'], PDO::PARAM_INT);
$result_competicoes->bindParam(':quantidade', $dados_requisicao['length'], PDO::PARAM_INT);

if(!empty($dados_requisicao['search']['value'])){
    $valor_pesquisa = "%" .  $dados_requisicao['search']['value'] . "%";
    $result_competicoes->bindParam(':apelido', $valor_pesquisa, PDO::PARAM_STR);
    $result_competicoes->bindParam(':organizador', $valor_pesquisa, PDO::PARAM_STR);
    $result_competicoes->bindParam(':situacao', $valor_pesquisa, PDO::PARAM_STR);
}

$result_competicoes->execute();

while($row_competicoes = $result_competicoes->fetch(PDO::FETCH_ASSOC)){
    extract($row_competicoes);
    $registro = [];
    $registro[] = $apelido;
    $registro[] = $organizador;
    $registro[] = $situacao;
    $dados_competicoes[] = $registro;
}

$resultado = [
    "draw" => intval($dados_requisicao['draw']),
    "recordsTotal" => intval($row_qnt_competicoes['qnt_competicoes']),
    "recordsFiltered" => intval($row_qnt_competicoes['qnt_competicoes']),
    "data" => $dados_competicoes
];

echo json_encode($resultado);
?>