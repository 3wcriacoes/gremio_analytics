<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Confrontos</title>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/cadastro_confrontos.css" />
    <link rel="stylesheet" href="./fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">

    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

</head>

<body>
    <section class="cadastros">

        <div class="cadastra_confrontos">

            <div class="cad_confrontos">
                <form action="cadastro_confrontos.php" method="POST" enctype="multipart/form-data" name="cadastro_confrontos" id="cadastro_confrontos">
                    <p><strong>CADASTRO DE CONFRONTOS</strong></p>

                    <table class="dados_confrontos">
                        <tr>
                            <td><input type="date" name="dt_confronto" id="dt_confronto"  /></td>
                        </tr>

                        <tr>
                            <td id="content_select">
                                <select name="competicoes" id="competicoes">
                                    <option id="select">Selecione a Competição:</option>
                                    <?php
                                    $query = $conn->query("SELECT * FROM competicoes ORDER BY apelido_da_competicao ASC");
                                    $reg_competicoes = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($reg_competicoes as $option) {
                                    ?>
                                        <option value="<?php echo $option['apelido_da_competicao'] ?>"><?php echo $option['apelido_da_competicao'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td id="select_position" required>
                                <select name="fase" id="fase">
                                    <option id="select">Selecione a Fase</option>
                                    <option id="select" value="Primeiro Jogo">Primeiro Jogo</option>
                                    <option id="select" value="Segundo Jogo">Segundo Jogo</option>
                                    <option id="select" value="Jogo Único">Jogo Único</option>
                                    <option id="select" value="Jogo de Ida">Jogo de Ida</option>
                                    <option id="select" value="Jogo de Volta">Jogo de Volta</option>
                                    <option id="select" value="Primeiro Turno">Primeiro Turno</option>
                                    <option id="select" value="Segundo Turno">Segundo Turno</option>
                                    <option id="select" value="Primeira Fase">Primeira Fase</option>
                                    <option id="select" value="Segunda Fase">Segunda Fase</option>
                                    <option id="select" value="Terceira Fase">Terceira Fase</option>
                                    <option id="select" value="Quarta Fase">Quarta Fase</option>
                                    <option id="select" value="Oitavas de Final">Oitavas de Final</option>
                                    <option id="select" value="Quartas de Final">Quartas de Final</option>
                                    <option id="select" value="Semi Final">Semi Final</option>
                                    <option id="select" value="Final">Final</option>
                                    <option id="select" value="Amistoso">Amistoso</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td id="select_position" required>
                                <select name="rodada" id="rodada">
                                    <option id="select">Selecione a Rodada</option>
                                    <option id="select" value="Primeira Rodada">Primeira Rodada</option>
                                    <option id="select" value="Segunda Rodada">Segunda Rodada</option>
                                    <option id="select" value="Terceira Rodada">Terceira Rodada</option>
                                    <option id="select" value="Quarta Rodada">Quarta Rodada</option>
                                    <option id="select" value="Quinta Rodada">Quinta Rodada</option>
                                    <option id="select" value="Sexta Rodada">Sexta Rodada</option>
                                    <option id="select" value="Sétima Rodada">Sétima Rodada</option>
                                    <option id="select" value="Oitava Rodada">Oitava Rodada</option>
                                    <option id="select" value="Nona Rodada">Nona Rodada</option>
                                    <option id="select" value="Décima Rodada">Décima Rodada</option>
                                    <option id="select" value="Décima Primeira Rodada">Décima Primeira Rodada</option>
                                    <option id="select" value="Décima Segunda Rodada">Décima Segunda Rodada</option>
                                    <option id="select" value="Décima Terceira Rodada">Décima Terceira Rodada</option>
                                    <option id="select" value="Décima Quarta Rodada">Décima Quarta Rodada</option>
                                    <option id="select" value="Décima Quinta Rodada">Décima Quinta Rodada</option>
                                    <option id="select" value="Décima Sexta Rodada">Décima Sexta Rodada</option>
                                    <option id="select" value="Décima Sétima Rodada">Décima Sétima Rodada</option>
                                    <option id="select" value="Décima Oitava Rodada">Décima Oitava Rodada</option>
                                    <option id="select" value="Décima Nona Rodada">Décima Nona Rodada</option>
                                    <option id="select" value="Vigésima Rodada">Vigésima Rodada</option>
                                    <option id="select" value="Jogo Único">Jogo Único</option>
                                    <option id="select" value="Jogo de Ida">Jogo de Ida</option>
                                    <option id="select" value="Jogo de Volta">Jogo de Volta</option>
                                    <option id="select" value="Semifinal">Semifinal</option>
                                    <option id="select" value="Final">Final</option>
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
                            <td id="content_select">
                                <select name="clube_mandante" id="clube_mandante">
                                    <option id="select">Selecione o Clube Mandante:</option>
                                    <?php
                                    $query = $conn->query("SELECT * FROM clubes ORDER BY apelido_do_clube ASC");
                                    $reg_clubes = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($reg_clubes as $option) {
                                    ?>
                                        <option value="<?php echo $option['apelido_do_clube'] ?>"><?php echo $option['apelido_do_clube'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td id="select_position" required>
                                <select name="placar_mandante" id="placar_mandante">
                                    <option id="select">Placar Mandante</option>
                                    <option id="select" value="0">0</option>
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
                        </tr>

                        <tr>
                            <td id="select_position" required>
                                <select name="placar_visitante" id="placar_visitante">
                                    <option id="select">Placar Visitante</option>
                                    <option id="select" value="0">0</option>
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
                        </tr>

                        <tr>
                            <td id="content_select">
                                <select name="clube_visitante" id="clube_visitante">
                                    <option id="select">Selecione o Clube Visitante:</option>
                                    <?php
                                    $query = $conn->query("SELECT * FROM clubes ORDER BY apelido_do_clube ASC");
                                    $reg_clubes = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($reg_clubes as $option) {
                                    ?>
                                        <option value="<?php echo $option['apelido_do_clube'] ?>"><?php echo $option['apelido_do_clube'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <td id="select_position" required>
                            <select name="situacao" id="situacao">
                                <option id="select">Selecione o Status</option>
                                <option id="select" value="Vitória">Vitória</option>
                                <option id="select" value="Empate">Empate</option>
                                <option id="select" value="Derrota">Derrota</option>
                            </select>
                        </td>

                        <tr>
                            <td id="content_select" required>
                                <select name="treinadores" id="treinadores">
                                    <option id="select">Selecione o Treinador:</option>
                                    <?php
                                    $query = $conn->query("SELECT * FROM treinadores ORDER BY apelido ASC");
                                    $reg_treinadores = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($reg_treinadores as $option) {
                                    ?>
                                        <option value="<?php echo $option['apelido'] ?>"><?php echo $option['apelido'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td><input type="text" name="historia" id="historia" placeholder="Sobre a partida..." /></td>
                        </tr>


                        <tr>
                            <td><input type="submit" name="salvar" id="salvar" value="Cadastrar" class="btn" /></td>
                        </tr>
                    </table>
            </div>
        </div>

        <div class="lista_confrontos">
                <p><strong>LISTA CONFRONTOS CADASTRADOS</strong></p>
                <?php
                include "confrontos_datatable.php";
                ?>
            </div>
    </section>