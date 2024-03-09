<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Treinadores por Temporada</title>

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
                <form action="cadastro_ano_comanda.php" method="POST" enctype="multipart/form-data" name="cadastro_ano_comanda" id="cadastro_ano_comanda">
                    <p><strong>CADASTRAR TEMPORADA DO TREINADOR</strong></p>
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
                                <select name="id_treinadores" id="id_treinadores">
                                    <option id="select">Selecione o Treinador:</option>
                                    <?php
                                    $query = $conn->query("SELECT * FROM treinadores ORDER BY treinador ASC");
                                    $reg_treinadores = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($reg_treinadores as $option) {
                                    ?>
                                        <option value="<?php echo $option['id_treinadores'] ?>"><?php echo $option['treinador'] ?></option>
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
                            <img src="./img/espinosa.jpeg">
                        </div>
                    </table>
                </form>
            </div>

            <div class="lista_temporadas">
                <p><strong>LISTA TREINADORES CADASTRADOS NO ANO</strong></p>
                <?php
                include "ano_comanda_datatable.php";
                ?>
            </div>