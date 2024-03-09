<?php
include_once "classeCompeticoes.php";
include_once "config.php";
include_once "conexao.php";

$mysqli = new mysqli($host, $user, $password, $dataBase);

if (mysqli_connect_error()) {
    echo "Falha ao conectar no Banco de Dados";
} else {

    if (isset($_POST['salvar'])) {
        if ($_POST['id_competicoes'] == "") {
            $competicao = $_POST['competicao'];
            $apelido = $_POST['apelido'];
            $organizador = $_POST['organizador'];
            

            //salva o registro na base de dados
            //Forma a instrução
            $query = "INSERT INTO competicoes (competicao, apelido, organizador, situacao) VALUES ('$competicao', '$apelido', '$organizador', 'Ativo')";

            header("Location: cadastro_diversos.php");
        }

        $result = $mysqli->query($query) or trigger_error($mysqli->error, E_USER_ERROR);
    }
}
?>

<?php
include "formCadastraCompeticoes.php";
?>
</div>