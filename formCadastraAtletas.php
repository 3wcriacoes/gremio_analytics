<?php
include "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Atletas</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_atletas.css" />

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
<section class="cadastros">
        <div class="img_escudos">
            <img src="./img/escudo_gremio_old_01.png">
            <img src="./img/escudo_gremio_atual.png">
            <img src="./img/escudo_gremio_old_02.png">
        </div>
        <div class="cadastra_atletas">

            <div class="cad_atletas">
                <form action="cadastro_atletas.php" method="POST" enctype="multipart/form-data" name="cadastro_atletas" id="cadastro_atletas">
                    <p><strong>CADASTRO DE ATLETAS</strong></p>

                    <table class="dados_atletas">
                        <tr>
                            <td><input type="text" name="atleta" id="atleta" placeholder="Digite o nome do Atleta" required/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="apelido" id="apelido" placeholder="Digite o apelido do Atleta" required/></td>
                        </tr>
                        <tr>
                            <td><input type="date" name="dt_nascimento" id="dt_nascimento" required/></td>
                        </tr>
                        <tr>
                            <td id="select_position" required>
                                <select name="posicao" id="posicao">
                                    <option id="select">Selecione a Posição</option>
                                    <option id="select" value="Goleiro">Goleiro</option>
                                    <option id="select" value="Lateral Direito">Lateral Direito</option>
                                    <option id="select" value="Lateral Esquerdo">Lateral Esquerdo</option>
                                    <option id="select" value="Zagueiro">Zagueiro</option>
                                    <option id="select" value="Volante">Volante</option>
                                    <option id="select" value="Meia">Meia</option>
                                    <option id="select" value="Atacante">Atacante</option>
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
                            <td id="content"><input type="file" name="imagem" id="imagem" required/></td>
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

            <div class="lista_atletas">
                <p><strong>LISTA ATLETAS CADASTRADOS</strong></p>
                <?php
                include "atletas_datatable.php";
                ?>
            </div>
        </div>
    </section>