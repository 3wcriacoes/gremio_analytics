<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Anos(Temporadas)</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_anos.css" />

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
    <section class="cadastros">

        <div class="cadastra_anos">

            <div class="cad_anos">
                <form action="cadastro_anos.php" method="POST" enctype="multipart/form-data" name="cadastro_anos" id="cadastro_anos">
                    <p><strong>CADASTRO DE ANOS (TEMPORADAS)</strong></p>

                    <table class="dados_anos">

                        <tr>
                            <td id="content"><input type="text" name="ano" id="ano" required autofocus="ano" placeholder="Digite o Ano" /></td>
                        </tr>

                        <tr>
                        <td><input type="submit" name="salvar" id="salvar" value="Cadastrar" class="btn" /></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="lista_anos">
                <p><strong>LISTA ANOS CADASTRADOS</strong></p>
                <?php
                include "anos_datatable.php";
                ?>
            </div>

        </div>
    </section>