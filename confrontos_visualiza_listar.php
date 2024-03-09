<?php

include_once 'conn.php';

$dados_requisicao = $_REQUEST;

$colunas = [
    0 => 'ano_confronto',
    1 => 'data_confronto',
    2 => 'competicoes',
    3 => 'clube_mandante',
    4 => 'placar_mandante',
    5 => 'placar_visitante',
    6 => 'clube_visitante',
    7 => 'estadios',
    8 => 'acoes',
];

$query_qnt_confrontos = "SELECT COUNT(id_confrontos) AS qnt_confrontos FROM confrontos";
$result_qnt_confrontos = $conn->prepare($query_qnt_confrontos);
$result_qnt_confrontos->execute();
$row_qnt_confrontos = $result_qnt_confrontos->fetch(PDO::FETCH_ASSOC);

$query_confrontos = "SELECT ano_confronto, DATE_FORMAT(dt_confronto, '%d/%m/%Y') as data_confronto, competicoes, 
estadios, clube_mandante, placar_mandante, placar_visitante, clube_visitante
FROM confrontos c";


if(!empty($dados_requisicao['search']['value'])){
    $query_confrontos .= " WHERE competicoes LIKE :competicoes ";
    $query_confrontos .= " OR estadios LIKE :estadios ";
    $query_confrontos .= " OR ano_confronto LIKE :ano_confronto ";
    $query_confrontos .= " OR clube_mandante LIKE :clube_mandante ";
    $query_confrontos .= " OR clube_visitante LIKE :clube_mandante ";
}

$query_confrontos .= " ORDER BY " . $colunas[$dados_requisicao['order'][0]['column']] . "  " . 
$dados_requisicao['order'][0]['dir'] . " LIMIT :inicio , :quantidade";
                   
$result_confrontos = $conn->prepare($query_confrontos);
$result_confrontos->bindParam(':inicio', $dados_requisicao['start'], PDO::PARAM_INT);
$result_confrontos->bindParam(':quantidade', $dados_requisicao['length'], PDO::PARAM_INT);

if(!empty($dados_requisicao['search']['value'])){
    $valor_pesquisa = "%" .  $dados_requisicao['search']['value'] . "%";
    $result_confrontos->bindParam(':competicoes', $valor_pesquisa, PDO::PARAM_STR);
    $result_confrontos->bindParam(':estadios', $valor_pesquisa, PDO::PARAM_STR);
    $result_confrontos->bindParam(':ano_confronto', $valor_pesquisa, PDO::PARAM_STR);
    $result_confrontos->bindParam(':clube_mandante', $valor_pesquisa, PDO::PARAM_STR);
    $result_confrontos->bindParam(':clube_visitante', $valor_pesquisa, PDO::PARAM_STR);
}

$result_confrontos->execute();

while($row_confrontos = $result_confrontos->fetch(PDO::FETCH_ASSOC)){
    extract($row_confrontos);
    $registro = [];
    $registro[] = $ano_confronto;
    $registro[] = $data_confronto;
    $registro[] = $competicoes;
    $registro[] = $clube_mandante;
    $registro[] = $placar_mandante;
    $registro[] = $placar_visitante;
    $registro[] = $clube_visitante;
    $registro[] = $estadios;
    $registro[] = "<button type='button' href='confrontos_visualiza_estatisticas.php?id=$id' class='btn btn-outline-primary btn-sm'><i class='fa-solid fa-magnifying-glass'></i></button>";
    $dados_confrontos[] = $registro;
    
}

$resultado = [
    "draw" => intval($dados_requisicao['draw']),
    "recordsTotal" => intval($row_qnt_confrontos['qnt_confrontos']),
    "recordsFiltered" => intval($row_qnt_confrontos['qnt_confrontos']),
    "data" => $dados_confrontos
];

echo json_encode($resultado);
?>