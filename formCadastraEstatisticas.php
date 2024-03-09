<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Estatísticas</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_estatisticas.css" />

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
    <section class="cadastros">

        <div class="cadastra_estatisticas">

            <div class="cad_estatisticas">
                <form action="cadastro_estatisticas.php" method="POST" enctype="multipart/form-data" name="cadastro_estatisticas" id="cadastro_estatisticas">
                    <p><strong>CADASTRO DE ESTATÍSTICAS</strong></p>

                    <div class="dados_estatisticas">
                        <table class="estatisticas">
                            <tr>
                                <td id="content_select" required>
                                    <select name="id_confrontos" id="id_confrontos" autofocus>
                                        <option id="select">Selecione o Confronto:</option>
                                        <?php
                                        $query = $conn->query("SELECT id_confrontos, DATE_FORMAT(dt_confronto, '%d/%m/%Y') as data_confronto FROM confrontos ORDER BY dt_confronto DESC");
                                        $reg_confrontos = $query->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($reg_confrontos as $option) {
                                        ?>
                                            <option value="<?php echo $option['id_confrontos'] ?>"><?php echo $option['data_confronto'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </td>

                                <td id="content_select" required>
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

                                <td id="select_position" required>
                                    <select name="gols_marcados" id="gols_marcados">
                                        <option id="select" value="0">Gols Marcados</option>
                                        <option id="select" value="1">1</option>
                                        <option id="select" value="2">2</option>
                                        <option id="select" value="3">3</option>
                                        <option id="select" value="4">4</option>
                                        <option id="select" value="5">5</option>
                                        <option id="select" value="6">6</option>
                                        <option id="select" value="7">7</option>
                                        <option id="select" value="8">8</option>
                                        <option id="select" value="9">9</option>
                                        <option id="select" value="10">10</option>
                                    </select>
                                </td>

                                <td id="select_position" required>
                                    <select name="gols_sofridos" id="gols_sofridos">
                                        <option id="select" value="0">Gols Sofridos</option>
                                        <option id="select" value="1">1</option>
                                        <option id="select" value="2">2</option>
                                        <option id="select" value="3">3</option>
                                        <option id="select" value="4">4</option>
                                        <option id="select" value="5">5</option>
                                        <option id="select" value="6">6</option>
                                        <option id="select" value="7">7</option>
                                        <option id="select" value="8">8</option>
                                        <option id="select" value="9">9</option>
                                        <option id="select" value="10">10</option>
                                    </select>
                                </td>

                                <td id="select_position" required>
                                    <select name="cartoes_amarelos" id="cartoes_amarelos">
                                        <option id="select" value="0">Cartões Amarelos</option>
                                        <option id="select" value="1">1</option>
                                        <option id="select" value="2">2</option>
                                    </select>
                                </td>

                                <td id="select_position" required>
                                    <select name="cartoes_vermelhos" id="cartoes_vermelhos">
                                        <option id="select" value="0">Cartões Vermelhos</option>
                                        <option id="select" value="1">1</option>
                                    </select>
                                </td>

                                <td id="select_position" required>
                                    <select name="situacao" id="situacao">
                                        <option id="select" value="Titular">Titular</option>
                                        <option id="select" value="Saiu">Saiu</option>
                                        <option id="select" value="Entrou">Entrou</option>
                                        <option id="select" value="Reserva">Reserva</option>
                                        <option id="select" value="Gol Contra">Gol Contra</option>
                                    </select>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <div class="enviar_estatisticas">
                        <table>
                            <tr>
                                <td><input type="submit" name="salvar" id="salvar" value="Cadastrar" class="btn" /></td>
                            </tr>
                        </table>
                    </div>

                </form>


            </div>

        </div>

    </section>