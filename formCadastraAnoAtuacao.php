<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Atletas por Temporada</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_temporadas.css" />

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
<section class="cadastros">
        <div class="img_escudos">
            <img src="./img/escudo_gremio_old_01.png">
            <img src="./img/escudo_gremio_atual.png">
            <img src="./img/escudo_gremio_old_02.png">
        </div>
        <div class="cadastra_temporadas">

        <div class="cad_temporadas">
                <form action="cadastro_ano_atuacao.php" method="POST" enctype="multipart/form-data" name="cadastro_ano" id="cadastros_anos">
                    <p><strong>CADASTRAR TEMPORADA DO ATLETA</strong></p>

                    <table class="dados_temporadas">

                        <tr>
                            <td id="content_select">
                                <select name="id_anos" id="id_anos">
                                    <option id="select">Selecione o Ano:</option>
                                    <?php
                                    $query = $conn->query("SELECT * FROM ano ORDER BY ano DESC");
                                    $reg_anos = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($reg_anos as $option) {
                                    ?>
                                        <option value="<?php echo $option['id_anos'] ?>"><?php echo $option['ano'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td id="content_select">
                                <select name="id_atletas" id="id_atletas">
                                    <option id="select">Selecione o Atleta:</option>
                                    <?php
                                    $query = $conn->query("SELECT * FROM atletas ORDER BY apelido ASC");
                                    $reg_atletas = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($reg_atletas as $option) {
                                    ?>
                                        <option value="<?php echo $option['id_atletas'] ?>"><?php echo $option['apelido'] ?> - <?php echo $option['atleta'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        <td><input type="submit" name="salvar" id="salvar" value="Cadastrar" class="btn" /></td>
                        </tr>
                        <div class="img_atleta">
                            <img src="./img/renato_gremio.jpeg">
                        </div>
                    </table>
                </form>
            </div>

            <div class="lista_temporadas">
                <p><strong>LISTA ATLETAS CADASTRADOS NO ANO</strong></p>
                <?php
                include "ano_atuacao_datatable.php";
                ?>
            </div>