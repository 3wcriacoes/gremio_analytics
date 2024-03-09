<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Confrontos/Escalações/Estatísticas</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_scouts.css" />

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
    <div class="diversos">
        <div class="diversos_confrontos">
            <?php
                include_once "formCadastraConfrontos.php";
            ?>
        </div>
        <div class="diversos_escalacoes">
            <?php
                include_once "formCadastraEscalacoes.php";
            ?>
        </div>
        <div class="diversos_estatisticas">
            <?php
                include_once "formCadastraEstatisticas.php";
            ?>
        </div>
    </div>
</body>

</html>