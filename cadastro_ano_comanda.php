<?php
include "classeAnoComanda.php";
include "config.php";
include "conexao.php";
$mysqli = new mysqli($host, $user, $password, $dataBase);

if (mysqli_connect_error()) {
    echo "Falha ao conectar no Banco de Dados";
} else {

    if (isset($_POST['salvar'])) {
        if (@$_POST['id'] == "") {

            $id_ano_comanda = $_POST['id_ano_comanda'];
            $id_anos = $_POST['id_anos'];
            $id_treinadores = $_POST['id_treinadores'];

            //salva o registro na base de dados
            //Forma a instrução
            $query = "INSERT INTO ano_comanda (id_anos, id_treinadores)	VALUES ('$id_anos','$id_treinadores')";

            header("Location: cadastro_ano_comanda.php");
        }

        $result = $mysqli->query($query) or trigger_error($mysqli->error, E_USER_ERROR);
    }
}
?>

<?php
include "formCadastraAnoComanda.php";
?>
</div>