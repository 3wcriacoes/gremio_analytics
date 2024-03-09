<?php
include_once "classeConfrontos.php";
include_once "config.php";
include_once "conexao.php";

$mysqli = new mysqli($host, $user, $password, $dataBase);

if (mysqli_connect_error()) {
    echo "Falha ao conectar no Banco de Dados";
} else {

    if (isset($_POST['salvar'])) {
        if (@$_POST['id'] == "") {
            $dt_confronto = $_POST['dt_confronto'];
            $competicoes = $_POST['competicoes'];
            $fase = $_POST['fase'];
            $rodada = $_POST['rodada'];
            $estadios = $_POST['estadios'];
            $clube_mandante = $_POST['clube_mandante'];
            $placar_mandante = $_POST['placar_mandante'];
            $placar_visitante = $_POST['placar_visitante'];
            $clube_visitante = $_POST['clube_visitante'];
            $situacao = $_POST['situacao'];
            $treinadores = $_POST['treinadores'];
            $historia = $_POST['historia'];

            //salva o registro na base de dados
            //Forma a instrução
            $query = "INSERT INTO confrontos (dt_confronto, ano_confronto, competicoes, fase, rodada, estadios, clube_mandante, placar_mandante, 
            placar_visitante, clube_visitante, situacao, treinadores, historia) 
            VALUES 
            ('$dt_confronto', YEAR(dt_confronto), '$competicoes', '$fase', '$rodada', '$estadios', '$clube_mandante', '$placar_mandante', '$placar_visitante', 
            '$clube_visitante', '$situacao', '$treinadores', '$historia')";

            header("Location: cadastro_confrontos.php");
        }


        $result = $mysqli->query($query) or trigger_error($mysqli->error, E_USER_ERROR);
    }
}
?>

<?php
include "formCadastraConfrontos.php";
?>
</div>