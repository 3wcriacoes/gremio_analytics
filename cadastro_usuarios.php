<?php
include "classeUsuarios.php";
include "config.php";
include "conexao.php";

$mysqli = new mysqli($host, $user, $password, $dataBase);

if (mysqli_connect_error()) {
    echo "Falha ao conectar no Banco de Dados";
} else {

    if (isset($_POST['salvar'])) {
        if (@$_POST['id_usuarios'] == "") {

            $id_usuarios = $_POST['id_usuarios'];
            $usuario = $_POST['usuario'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            //salva o registro na base de dados
            //Forma a instrução
            $query = "INSERT INTO usuarios (usuario, email, senha, situacao)	VALUES ('$usuario', '$email', '$senha', 1)";

            header("Location: cadastro_diversos.php");
        }

        $result = $mysqli->query($query) or trigger_error($mysqli->error, E_USER_ERROR);
    }
}
?>

<?php
include "formCadastraUsuarios.php";
?>
</div>