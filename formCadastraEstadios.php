<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Estádios</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_estadios.css" />

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
    <section class="cadastros">
        <div class="img_escudos">
            <img src="./img/escudo_gremio_old_01.png">
            <img src="./img/escudo_gremio_atual.png">
            <img src="./img/escudo_gremio_old_02.png">
        </div>
        <div class="cadastra_estadios">

            <div class="cad_estadios">
                <form action="cadastro_estadios.php" method="POST" enctype="multipart/form-data" name="cadastro_estadios" id="cadastro_estadios">
                    <p><strong>CADASTRO DE ESTÁDIOS</strong></p>

                    <table class="dados_estadios">
                        <tr>
                            <td><input type="text" name="nome_do_estadio" id="estnome_do_estadioadio" placeholder="Digite o nome do Estádio" required/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="apelido_do_estadio" id="apelido_do_estadio" placeholder="Digite o apelido do Estádio" required/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="capacidade" id="capacidade" placeholder="Digite a capacidade do Estádio" required/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="proprietario" id="proprietario" placeholder="Digite o proprietario do Estádio" required/></td>
                        </tr>
                        <tr>
                            <td><input type="date" name="dt_fundacao" id="dt_fundacao" /></td>
                        </tr>
                        <tr>
                            <td id="select_position">
                                <select name="situacao" id="situacao">
                                    <option id="select">Selecione a Situação</option>
                                    <option id="select" value="Em Atividade">Em atividade</option>
                                    <option id="select" value="Extinto">Extinto</option>
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
                            <td><input type="text" name="historia" id="historia" placeholder="Digite a história do Estádio" /></td>
                        </tr>

                        <tr>
                            <td id="content"><input type="file" name="imagem" id="imagem" /></td>
                        </tr>

                        <tr>
                        <td><input type="submit" name="salvar" id="salvar" value="Cadastrar" class="btn" /></td>
                        </tr>
                        <div class="img_estadio">
                            <img src="./img/baixada.jpg">
                            <img src="./img/olimpico.jpeg">
                            <img src="./img/arena.jpg">
                        </div>
                    </table>
                </form>
            </div>

            <div class="lista_estadios">
                <p><strong>LISTA ESTÁDIOS CADASTRADOS</strong></p>
                <?php
                include "estadios_datatable.php";
                ?>
            </div>
        </div>
    </section>