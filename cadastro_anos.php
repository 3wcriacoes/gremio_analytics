<?php
include "classeAno.php";
include "config.php";
include "conexao.php";

$mysqli = new mysqli($host, $user, $password, $dataBase);

if (mysqli_connect_error()) {
    echo "Falha ao conectar no Banco de Dados";
} else {

    if (isset($_POST['salvar'])) {
        if (@$_POST['id_anos'] == "") {
            $ano = $_POST['ano'];

            //salva o registro na base de dados
            //Forma a instrução
            $query = "INSERT INTO ano (ano)	VALUES ('$ano')";

            header("Location: cadastro_diversos.php");
        }

        $result = $mysqli->query($query) or trigger_error($mysqli->error, E_USER_ERROR);
    }
}
?>

<?php
include "formCadastraAno.php";
?>
</div>