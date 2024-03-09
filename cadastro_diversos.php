<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Usuários/Competições/Anos</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_diversos.css" />

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
    <div class="diversos">
        <div class="diversos_usuarios">
            <?php
                include_once "formCadastraUsuarios.php";
            ?>
        </div>
        <div class="diversos_competicoes">
            <?php
                include_once "formCadastraCompeticoes.php";
            ?>
        </div>
        <div class="diversos_anos">
            <?php
                include_once "formCadastraAno.php";
            ?>
        </div>
    </div>
</body>

</html>