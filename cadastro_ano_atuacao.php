<?php
include "classeAnoAtuacao.php";
include "config.php";
include "conexao.php";
$mysqli = new mysqli($host, $user, $password, $dataBase);

if (mysqli_connect_error()) {
    echo "Falha ao conectar no Banco de Dados";
} else {

    if (isset($_POST['salvar'])) {
        if (@$_POST['id'] == "") {

            $id_ano_atuacao = $_POST['id_ano_atuacao'];
            $id_anos = $_POST['id_anos'];
            $id_atletas = $_POST['id_atletas'];

            //salva o registro na base de dados
            //Forma a instrução
            $query = "INSERT INTO ano_atuacao (id_anos, id_atletas)	VALUES ('$id_anos','$id_atletas')";

            header("Location: cadastro_ano_atuacao.php");
        }

        $result = $mysqli->query($query) or trigger_error($mysqli->error, E_USER_ERROR);
    }
}
?>

<?php
include "formCadastraAnoAtuacao.php";
?>
</div>