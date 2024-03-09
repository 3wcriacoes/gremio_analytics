<?php

include_once 'conn.php';

$dados_requisicao = $_REQUEST;

$colunas = [
    0 => 'ano',
];

$query_qnt_temporadas = "SELECT COUNT(id_anos) AS qnt_temporadas FROM ano";
$result_qnt_temporadas = $conn->prepare($query_qnt_temporadas);
$result_qnt_temporadas->execute();
$row_qnt_temporadas = $result_qnt_temporadas->fetch(PDO::FETCH_ASSOC);


$query_temporadas = "SELECT ano FROM ano"; 

if(!empty($dados_requisicao['search']['value'])){
    $query_temporadas .= " WHERE ano LIKE :ano ";
}

$query_temporadas .= " ORDER BY " . $colunas[$dados_requisicao['order'][0]['column']] . " " . 
$dados_requisicao['order'][0]['dir'] . " LIMIT :inicio , :quantidade";
                   
$result_temporadas = $conn->prepare($query_temporadas);
$result_temporadas->bindParam(':inicio', $dados_requisicao['start'], PDO::PARAM_INT);
$result_temporadas->bindParam(':quantidade', $dados_requisicao['length'], PDO::PARAM_INT);

if(!empty($dados_requisicao['search']['value'])){
    $valor_pesquisa = "%" .  $dados_requisicao['search']['value'] . "%";
    $result_temporadas->bindParam(':ano', $valor_pesquisa, PDO::PARAM_STR);
}

$result_temporadas->execute();

while($row_temporadas = $result_temporadas->fetch(PDO::FETCH_ASSOC)){
    extract($row_temporadas);
    $registro = [];
    $registro[] = $ano;
    $dados_temporadas[] = $registro;
    
}

$resultado = [
    "draw" => intval($dados_requisicao['draw']),
    "recordsTotal" => intval($row_qnt_temporadas['qnt_temporadas']),
    "recordsFiltered" => intval($row_qnt_temporadas['qnt_temporadas']),
    "data" => $dados_temporadas
];

echo json_encode($resultado);
?>