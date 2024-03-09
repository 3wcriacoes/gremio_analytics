<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Clubes</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_clubes.css" />

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
    <section class="cadastros">
    <div class="img_escudos">
            <img src="./img/escudo_gremio_old_01.png">
            <img src="./img/escudo_gremio_atual.png">
            <img src="./img/escudo_gremio_old_02.png">
        </div>
        <div class="cadastra_clubes">

             <div class="cad_clubes">
                <form action="cadastro_clubes.php" method="POST" enctype="multipart/form-data" name="cadastro_clubes" id="cadastro_clubes">
                    <p><strong>CADASTRO DE CLUBES</strong></p>

                    <table class="dados_clubes">

                        <tr>
                            <td><input type="text" name="nome_do_clube" id="nome_do_clube" placeholder="Digite o nome do Clube" /></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="apelido_do_clube" id="apelido_do_clube" placeholder="Digite o apelido do Clube" /></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="torcida" id="torcida" placeholder="Digite a alcunha da torcida" /></td>
                        </tr>
                        <tr>
                            <td><input type="date" name="dt_fundacao" id="dt_fundacao" /></td>
                        </tr>
                        <tr>
                            <td id="select_position">
                                <select name="situacao" id="situacao">
                                    <option id="select">Selecione a Situação</option>
                                    <option id="select" value="Ativo">Em atividade</option>
                                    <option id="select" value="Inativo">Extinto</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td id="content_select">
                                <select name="municipios" id="municipios">
                                    <option id="select">Selecione o Município:</option>
                                    <?php
                                    $query = $conn->query("SELECT * FROM municipios ORDER BY municipio ASC");
                                    $reg_municipios = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($reg_municipios as $option) {
                                    ?>
                                        <option value="<?php echo $option['municipio'] ?>"><?php echo $option['municipio'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td id="content_select">
                                <select name="estados" id="estados">
                                    <option id="select">Selecione o Estado:</option>
                                    <?php
                                    $query = $conn->query("SELECT * FROM estados ORDER BY estado ASC");
                                    $reg_estados = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($reg_estados as $option) {
                                    ?>
                                        <option value="<?php echo $option['estado'] ?>"><?php echo $option['estado'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td id="content_select">
                                <select name="paises" id="paises">
                                    <option id="select">Selecione o País:</option>
                                    <?php
                                    $query = $conn->query("SELECT * FROM paises ORDER BY pais ASC");
                                    $reg_paises = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($reg_paises as $option) {
                                    ?>
                                        <option value="<?php echo $option['pais'] ?>"><?php echo $option['pais'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td id="content_select">
                                <select name="estadios" id="estadios">
                                    <option id="select">Selecione o Estádio:</option>
                                    <?php
                                    $query = $conn->query("SELECT * FROM estadios ORDER BY apelido_do_estadio ASC");
                                    $reg_estadios = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($reg_estadios as $option) {
                                    ?>
                                        <option value="<?php echo $option['apelido_do_estadio'] ?>"><?php echo $option['apelido_do_estadio'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td id="content"><input type="file" name="imagem" id="imagem" /></td>
                        </tr>

                        <tr>
                        <td><input type="submit" name="salvar" id="salvar" value="Cadastrar" class="btn" /></td>
                            </tr>
                        <div class="img_clube">
                            <img src="./img/clubes.png">
                        </div>
                    </table>
                </form>
            </div>

            <div class="lista_clubes">
                <p><strong>LISTA CLUBES CADASTRADOS</strong></p>
                <?php
                include "clubes_datatable.php";
                ?>
            </div>
        </div>
    </section>