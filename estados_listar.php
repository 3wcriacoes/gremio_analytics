<?php

include_once 'conn.php';

$dados_requisicao = $_REQUEST;

$colunas = [
    0 => 'estado'
];

$query_qnt_estados = "SELECT COUNT(id_estados) AS qnt_estados FROM estados";
$result_qnt_estados = $conn->prepare($query_qnt_estados);
$result_qnt_estados->execute();
$row_qnt_estados = $result_qnt_estados->fetch(PDO::FETCH_ASSOC);


$query_estados = "SELECT id_estados, estado FROM estados "; 

if(!empty($dados_requisicao['search']['value'])){
    $query_estados .= " WHERE estado LIKE :estado ";
}

$query_estados .= " ORDER BY " . $colunas[$dados_requisicao['order'][0]['column']] . " " . 
$dados_requisicao['order'][0]['dir'] . " LIMIT :inicio , :quantidade";
                   
$result_estados = $conn->prepare($query_estados);
$result_estados->bindParam(':inicio', $dados_requisicao['start'], PDO::PARAM_INT);
$result_estados->bindParam(':quantidade', $dados_requisicao['length'], PDO::PARAM_INT);

if(!empty($dados_requisicao['search']['value'])){
    $valor_pesquisa = "%" .  $dados_requisicao['search']['value'] . "%";
    $result_estados->bindParam(':estado', $valor_pesquisa, PDO::PARAM_STR);
}

$result_estados->execute();

while($row_estado = $result_estados->fetch(PDO::FETCH_ASSOC)){
    extract($row_estado);
    $registro = [];
    $registro[] = $estado;
    $dados_estados[] = $registro;
    
}

$resultado = [
    "draw" => intval($dados_requisicao['draw']),
    "recordsTotal" => intval($row_qnt_estados['qnt_estados']),
    "recordsFiltered" => intval($row_qnt_estados['qnt_estados']),
    "data" => $dados_estados
];

echo json_encode($resultado);
?>