<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Competições</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_competicoes.css" />

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
    <section class="cadastros">

        <div class="cadastra_competicoes">

            <div class="cad_competicoes">
                <form action="cadastro_competicoes.php" method="POST" enctype="multipart/form-data" name="cadastro_competicoes" id="cadastro_competicoes">
                    <p><strong>CADASTRO DE COMPETIÇÕES</strong></p>

                    <table class="dados_competicoes">

                        <tr>
                            <td><input type="text" name="competicao" id="competicao" placeholder="Digite o Nome da Competição" required/></td>
                        </tr>

                        <tr>
                            <td><input type="text" name="apelido" id="apelido" placeholder="Digite o Apelido da Competição" required/></td>
                        </tr>

                        <tr>
                            <td><input type="text" name="organizador" id="organizador" placeholder="Digite o nome do Organizador" required/></td>
                        </tr>

                        <tr>
                        <td><input type="submit" name="salvar" id="salvar" value="Cadastrar" class="btn" /></td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="lista_competicoes">
                <p><strong>LISTA COMPETIÇÕES CADASTRADAS</strong></p>
                <?php
                    include "competicoes_datatable.php";
                ?>
            </div>
        </div>
    </section>