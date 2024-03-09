<?php

include_once 'conn.php';

$dados_requisicao = $_REQUEST;

$colunas = [
    0 => 'municipio'
];

$query_qnt_municipios = "SELECT COUNT(id_municipios) AS qnt_municipios FROM municipios";
$result_qnt_municipios = $conn->prepare($query_qnt_municipios);
$result_qnt_municipios->execute();
$row_qnt_municipios = $result_qnt_municipios->fetch(PDO::FETCH_ASSOC);


$query_municipios = "SELECT id_municipios, municipio FROM municipios "; 

if(!empty($dados_requisicao['search']['value'])){
    $query_municipios .= " WHERE municipio LIKE :municipio ";
}

$query_municipios .= " ORDER BY " . $colunas[$dados_requisicao['order'][0]['column']] . " " . 
$dados_requisicao['order'][0]['dir'] . " LIMIT :inicio , :quantidade";
                   
$result_municipios = $conn->prepare($query_municipios);
$result_municipios->bindParam(':inicio', $dados_requisicao['start'], PDO::PARAM_INT);
$result_municipios->bindParam(':quantidade', $dados_requisicao['length'], PDO::PARAM_INT);

if(!empty($dados_requisicao['search']['value'])){
    $valor_pesquisa = "%" .  $dados_requisicao['search']['value'] . "%";
    $result_municipios->bindParam(':municipio', $valor_pesquisa, PDO::PARAM_STR);
}

$result_municipios->execute();

while($row_municipio = $result_municipios->fetch(PDO::FETCH_ASSOC)){
    extract($row_municipio);
    $registro = [];
    $registro[] = $municipio;
    $dados_municipios[] = $registro;
    
}

$resultado = [
    "draw" => intval($dados_requisicao['draw']),
    "recordsTotal" => intval($row_qnt_municipios['qnt_municipios']),
    "recordsFiltered" => intval($row_qnt_municipios['qnt_municipios']),
    "data" => $dados_municipios
];

echo json_encode($resultado);
?>