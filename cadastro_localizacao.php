<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Municípios/Estados/Países</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_localizacao.css" />

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
    <div class="localizacao">
        <div class="localiza_municipios">
            <?php
                include_once "formCadastraMunicipios.php";
            ?>
        </div>
        <div class="localiza_estados">
            <?php
                include_once "formCadastraEstados.php";
            ?>
        </div>
        <div class="localiza_paises">
            <?php
                include_once "formCadastraPaises.php";
            ?>
        </div>
    </div>
</body>

</html>