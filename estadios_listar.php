<?php

include_once 'conn.php';

$dados_requisicao = $_REQUEST;

$colunas = [
    0 => 'apelido_do_estadio',
    1 => 'proprietario',
    2 => 'estados',
    3 => 'situacao',
    4 => 'data_fundacao',
];

$query_qnt_estadios = "SELECT COUNT(id_estadios) AS qnt_estadios FROM estadios";
$result_qnt_estadios = $conn->prepare($query_qnt_estadios);
$result_qnt_estadios->execute();
$row_qnt_estadios = $result_qnt_estadios->fetch(PDO::FETCH_ASSOC);


$query_estadios = "SELECT id_estadios, apelido_do_estadio, proprietario, situacao, estados, DATE_FORMAT(dt_fundacao, '%d/%m/%Y') as data_fundacao 
                  FROM estadios "; 

if(!empty($dados_requisicao['search']['value'])){
    $query_estadios .= " WHERE apelido_do_estadio LIKE :apelido_do_estadio ";
    $query_estadios .= " OR proprietario LIKE :proprietario ";
    $query_estadios .= " OR estados LIKE :estados ";
    $query_estadios .= " OR situacao LIKE :situacao ";
}

$query_estadios .= " ORDER BY " . $colunas[$dados_requisicao['order'][0]['column']] . " " . 
$dados_requisicao['order'][0]['dir'] . " LIMIT :inicio , :quantidade";
                   
$result_estadios = $conn->prepare($query_estadios);
$result_estadios->bindParam(':inicio', $dados_requisicao['start'], PDO::PARAM_INT);
$result_estadios->bindParam(':quantidade', $dados_requisicao['length'], PDO::PARAM_INT);


if(!empty($dados_requisicao['search']['value'])){
    $valor_pesquisa = "%" .  $dados_requisicao['search']['value'] . "%";
    $result_estadios->bindParam(':apelido_do_estadio', $valor_pesquisa, PDO::PARAM_STR);
    $result_estadios->bindParam(':proprietario', $valor_pesquisa, PDO::PARAM_STR);
    $result_estadios->bindParam(':estados', $valor_pesquisa, PDO::PARAM_STR);
    $result_estadios->bindParam(':situacao', $valor_pesquisa, PDO::PARAM_STR);
}

$result_estadios->execute();

while($row_estadio = $result_estadios->fetch(PDO::FETCH_ASSOC)){
    extract($row_estadio);
    $registro = [];
    $registro[] = $apelido_do_estadio;
    $registro[] = $proprietario;
    $registro[] = $estados;
    $registro[] = $situacao;
    $registro[] = $data_fundacao;
    $dados_estadios[] = $registro;
    
}

$resultado = [
    "draw" => intval($dados_requisicao['draw']),
    "recordsTotal" => intval($row_qnt_estadios['qnt_estadios']),
    "recordsFiltered" => intval($row_qnt_estadios['qnt_estadios']),
    "data" => $dados_estadios
];

echo json_encode($resultado);
?>