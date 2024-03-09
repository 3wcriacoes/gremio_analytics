<?php

include_once 'conn.php';

$dados_requisicao = $_REQUEST;

$colunas = [
    0 => 'pais'
];

$query_qnt_paises = "SELECT COUNT(id_paises) AS qnt_paises FROM paises";
$result_qnt_paises = $conn->prepare($query_qnt_paises);
$result_qnt_paises->execute();
$row_qnt_paises = $result_qnt_paises->fetch(PDO::FETCH_ASSOC);


$query_paises = "SELECT id_paises, pais FROM paises "; 

if(!empty($dados_requisicao['search']['value'])){
    $query_paises .= " WHERE pais LIKE :pais ";
}

$query_paises .= " ORDER BY " . $colunas[$dados_requisicao['order'][0]['column']] . " " . 
$dados_requisicao['order'][0]['dir'] . " LIMIT :inicio , :quantidade";
                   
$result_paises = $conn->prepare($query_paises);
$result_paises->bindParam(':inicio', $dados_requisicao['start'], PDO::PARAM_INT);
$result_paises->bindParam(':quantidade', $dados_requisicao['length'], PDO::PARAM_INT);

if(!empty($dados_requisicao['search']['value'])){
    $valor_pesquisa = "%" .  $dados_requisicao['search']['value'] . "%";
    $result_paises->bindParam(':pais', $valor_pesquisa, PDO::PARAM_STR);
}

$result_paises->execute();

while($row_pais = $result_paises->fetch(PDO::FETCH_ASSOC)){
    extract($row_pais);
    $registro = [];
    $registro[] = $pais;
    $dados_paises[] = $registro;
    
}

$resultado = [
    "draw" => intval($dados_requisicao['draw']),
    "recordsTotal" => intval($row_qnt_paises['qnt_paises']),
    "recordsFiltered" => intval($row_qnt_paises['qnt_paises']),
    "data" => $dados_paises
];

echo json_encode($resultado);
?>