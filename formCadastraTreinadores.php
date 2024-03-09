<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Treinadores</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_treinadores.css" />

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
    <section class="cadastros">
        <div class="img_escudos">
            <img src="./img/escudo_gremio_old_01.png">
            <img src="./img/escudo_gremio_atual.png">
            <img src="./img/escudo_gremio_old_02.png">
        </div>
        <div class="cadastra_treinadores">

            <div class="cad_treinadores">
                <form action="cadastro_treinadores.php" method="POST" enctype="multipart/form-data" name="cadastro_treinadores" id="cadastro_treinadores">
                    <p><strong>CADASTRO DE TREINADORES</strong></p>

                    <table class="dados_treinadores">
                        <tr>
                            <td><input type="text" name="treinador" id="treinador" placeholder="Digite o nome do Treinador" required/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="apelido" id="apelido" placeholder="Digite o apelido do Treinador" required/></td>
                        </tr>
                        <tr>
                            <td><input type="date" name="dt_nascimento" id="dt_nascimento" required/></td>
                        </tr>
                        <tr>
                            <td id="select_position" required>
                                <select name="situacao" id="situacao">
                                    <option id="select">Selecione a Situação</option>
                                    <option id="select" value="Em Atividade">Em atividade</option>
                                    <option id="select" value="Aposentado">Aposentado</option>
                                    <option id="select" value="Falecido">Falecido</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td id="content_select" required>
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
                            <td id="content_select" required>
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
                            <td id="content_select" required>
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
                            <td><input type="text" name="clube_atual" id="clube_atual" placeholder="Digite o Clube atual do Treinador" required/></td>
                        </tr>

                        <tr>
                            <td id="content"><input type="file" name="imagem" id="imagem" /></td>
                        </tr>

                        <tr>
                            <td><input type="submit" name="salvar" id="salvar" value="Cadastrar" class="btn" /></td>
                        </tr>
                        <div class="img_treinador">
                            <img src="./img/espinosa.jpeg">
                        </div>
                    </table>
                </form>
            </div>

            <div class="lista_treinadores">
                <p><strong>LISTA TREINADORES CADASTRADOS</strong></p>
                <?php
                include "treinadores_datatable.php";
                ?>
            </div>
        </div>
    </section>