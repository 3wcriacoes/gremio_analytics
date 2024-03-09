<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Municípios</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_municipios.css" />

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
    <section class="cadastros">

        <div class="cadastra_municipios">

            <div class="cad_municipios">
                <form action="cadastro_municipios.php" method="POST" enctype="multipart/form-data" name="cadastro_municipios" id="cadastro_municipios">
                    <p><strong>CADASTRO DE MUNICÍPIOS</strong></p>

                    <table class="dados_municipios">

                        <tr>
                            <td id="content"><input type="text" name="municipio" id="municipio" placeholder="Digite o nome do Município" /></td>
                        </tr>

                        <tr>
                        <td><input type="submit" name="salvar" id="salvar" value="Cadastrar" class="btn" /></td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="lista_municipios">
                <p><strong>LISTA MUNICÍPIOS CADASTRADOS</strong></p>
                <?php
                include "municipios_datatable.php";
                ?>
            </div>
        </div>
    </section>