<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Estados</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_estados.css" />

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
    <section class="cadastros">

        <div class="cadastra_estados">

            <div class="cad_estados">
                <form action="cadastro_estados.php" method="POST" enctype="multipart/form-data" name="cadastro_estados" id="cadastro_estados">
                    <p><strong>CADASTRO DE ESTADOS</strong></p>

                    <table class="dados_estados">

                        <tr>
                            <td id="content"><input type="text" name="estado" id="estado" placeholder="Digite o nome do Estado" /></td>
                        </tr>

                        <tr>
                        <td><input type="submit" name="salvar" id="salvar" value="Cadastrar" class="btn" /></td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="lista_estados">
                <p><strong>LISTA ESTADOS CADASTRADOS</strong></p>
                <?php
                include "estados_datatable.php";
                ?>
            </div>
        </div>
    </section>