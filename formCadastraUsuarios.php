<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Usuários</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_usuarios.css" />

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
    <section class="cadastros">

        <div class="cadastra_usuarios">

            <div class="cad_usuarios">
                <form action="cadastro_usuarios.php" method="POST" enctype="multipart/form-data" name="cadastro_usuarios" id="cadastro_usuarios">
                    <p><strong>CADASTRO DE USUÁRIOS</strong></p>

                    <table class="usuarios_diversos">

                        <tr>
                            <td id="content"><input type="text" name="usuario" id="usuario" required autofocus="usuario" placeholder="Digite o Usuário" /></td>
                        </tr>
                        <tr>
                            <td id="content"><input type="text" name="email" id="email" required autofocus="email" placeholder="Digite o e-mail do Usuário" /></td>
                        </tr>
                        <tr>
                            <td id="content"><input type="text" name="senha" id="senha" required autofocus="senha" placeholder="Digite a senha do Usuário" /></td>
                        </tr>

                        <tr>
                        <td><input type="submit" name="salvar" id="salvar" value="Cadastrar" class="btn" /></td>
                        </tr>
                    </table>
                    </table>
                </form>
            </div>

            <div class="lista_usuarios">
                <p><strong>LISTA USUÁRIOS CADASTRADOS</strong></p>
                <?php
                include "usuarios_datatable.php";
                ?>
            </div>
        </div>
    </section>