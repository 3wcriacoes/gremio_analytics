<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Países</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_paises.css" />

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
    <section class="cadastros">

        <div class="cadastra_paises">

            <div class="cad_paises">
                <form action="cadastro_paises.php" method="POST" enctype="multipart/form-data" name="cadastro_paises" id="cadastro_paises">
                    <p><strong>CADASTRO DE PAÍSES</strong></p>

                    <table class="dados_paises">

                        <tr>
                            <td id="content"><input type="text" name="pais" id="pais" placeholder="Digite o nome do País" /></td>
                        </tr>

                        <tr>
                        <td><input type="submit" name="salvar" id="salvar" value="Cadastrar" class="btn" /></td>
                        </tr>
                    </table>
                    </table>
                </form>
            </div>

            <div class="lista_paises">
                <p><strong>LISTA PAÍSES CADASTRADOS</strong></p>
                <?php
                include "paises_datatable.php";
                ?>
            </div>
        </div>
    </section>