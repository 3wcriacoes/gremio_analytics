<?php

// Receber id enviado
$visualiza_estatistica = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$query_estatistica = "select * 
                      from estatisticas
                      where id = :estatistica_id
                      order by id desc
                      limit 1";

$resultado_estatistica = $conn->prepare($query_estatistica);

$resultado_estatistica->bindParam(':estatistica_id', $estatistica_id);

$resultado_estatistica->execute();
?>