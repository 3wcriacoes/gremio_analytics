<?php

include_once 'conn.php';

$dados_requisicao = $_REQUEST;

$colunas = [
    0 => 'apelido_do_clube',
    1 => 'torcida',
    2 => 'estadios',
    3 => 'municipios',
    4 => 'idade',
];

$query_qnt_clubes = "SELECT COUNT(id_clubes) AS qnt_clubes FROM clubes";
$result_qnt_clubes = $conn->prepare($query_qnt_clubes);
$result_qnt_clubes->execute();
$row_qnt_clubes = $result_qnt_clubes->fetch(PDO::FETCH_ASSOC);


$query_clubes = "SELECT id_clubes, apelido_do_clube, torcida, estadios, municipios, YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(c.dt_fundacao))) as idade 
                  FROM clubes c"; 

if(!empty($dados_requisicao['search']['value'])){
    $query_clubes .= " WHERE apelido_do_clube LIKE :apelido_do_clube ";
    $query_clubes .= " OR torcida LIKE :torcida ";
    $query_clubes .= " OR estadios LIKE :estadios ";
    $query_clubes .= " OR municipios LIKE :municipios ";
}

$query_clubes .= " ORDER BY " . $colunas[$dados_requisicao['order'][0]['column']] . " " . 
$dados_requisicao['order'][0]['dir'] . " LIMIT :inicio , :quantidade";
                   
$result_clubes = $conn->prepare($query_clubes);
$result_clubes->bindParam(':inicio', $dados_requisicao['start'], PDO::PARAM_INT);
$result_clubes->bindParam(':quantidade', $dados_requisicao['length'], PDO::PARAM_INT);


if(!empty($dados_requisicao['search']['value'])){
    $valor_pesquisa = "%" .  $dados_requisicao['search']['value'] . "%";
    $result_clubes->bindParam(':apelido_do_clube', $valor_pesquisa, PDO::PARAM_STR);
    $result_clubes->bindParam(':torcida', $valor_pesquisa, PDO::PARAM_STR); 
    $result_clubes->bindParam(':estadios', $valor_pesquisa, PDO::PARAM_STR);
    $result_clubes->bindParam(':municipios', $valor_pesquisa, PDO::PARAM_STR);
}

$result_clubes->execute();

while($row_clube = $result_clubes->fetch(PDO::FETCH_ASSOC)){
    extract($row_clube);
    $registro = [];
    $registro[] = $apelido_do_clube;
    $registro[] = $torcida;
    $registro[] = $estadios;
    $registro[] = $municipios;
    $registro[] = $idade. " anos";
    $dados_clubes[] = $registro;
    
}

$resultado = [
    "draw" => intval($dados_requisicao['draw']),
    "recordsTotal" => intval($row_qnt_clubes['qnt_clubes']),
    "recordsFiltered" => intval($row_qnt_clubes['qnt_clubes']),
    "data" => $dados_clubes
];

echo json_encode($resultado);
?>