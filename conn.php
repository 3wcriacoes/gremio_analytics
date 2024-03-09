<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'gremio_analytics';

try{
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    //echo "Conexão com o banco realizada com sucesso";
}catch(PDOException $err){
    //echo "Erro: Conexão com o banco de dados não realizada. Erro gerado" . $err->getMessage();
}