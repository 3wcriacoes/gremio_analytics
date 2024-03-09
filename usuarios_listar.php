<?php

include_once 'conn.php';

$dados_requisicao = $_REQUEST;

$colunas = [
    0 => 'usuario',
    1 => 'email',
    2 => 'situacao',
];

$query_qnt_usuarios = "SELECT COUNT(id_usuarios) AS qnt_usuarios FROM usuarios";
$result_qnt_usuarios = $conn->prepare($query_qnt_usuarios);
$result_qnt_usuarios->execute();
$row_qnt_usuarios = $result_qnt_usuarios->fetch(PDO::FETCH_ASSOC);


$query_usuarios = "SELECT usuario, email, situacao FROM usuarios"; 

if(!empty($dados_requisicao['search']['value'])){
    $query_usuarios .= " WHERE usuario LIKE :usuario ";
    $query_usuarios .= " OR situacao LIKE :situacao ";
}

$query_usuarios .= " ORDER BY " . $colunas[$dados_requisicao['order'][0]['column']] . " " . 
$dados_requisicao['order'][0]['dir'] . " LIMIT :inicio , :quantidade";
                   
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->bindParam(':inicio', $dados_requisicao['start'], PDO::PARAM_INT);
$result_usuarios->bindParam(':quantidade', $dados_requisicao['length'], PDO::PARAM_INT);

if(!empty($dados_requisicao['search']['value'])){
    $valor_pesquisa = "%" .  $dados_requisicao['search']['value'] . "%";
    $result_usuarios->bindParam(':usuario', $valor_pesquisa, PDO::PARAM_STR);
    $result_usuarios->bindParam(':situacao', $valor_pesquisa, PDO::PARAM_STR);
}

$result_usuarios->execute();

while($row_usuarios = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
    extract($row_usuarios);
    $registro = [];
    $registro[] = $usuario;
    $registro[] = $email;
    $registro[] = $situacao;
    $dados_usuarios[] = $registro;
}

$resultado = [
    "draw" => intval($dados_requisicao['draw']),
    "recordsTotal" => intval($row_qnt_usuarios['qnt_usuarios']),
    "recordsFiltered" => intval($row_qnt_usuarios['qnt_usuarios']),
    "data" => $dados_usuarios
];

echo json_encode($resultado);
?>