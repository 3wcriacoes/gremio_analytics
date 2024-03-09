<?php
include_once "classeEstatisticas.php";
include_once "config.php";
include_once "conexao.php";

$mysqli = new mysqli($host, $user, $password, $dataBase);

if (mysqli_connect_error()) {
    echo "Falha ao conectar no Banco de Dados";
} else {

    if (isset($_POST['salvar'])) {
        if (@$_POST['id_estatisticas'] == "") {
            $id_confrontos = $_POST['id_confrontos'];
            $id_atletas = $_POST['id_atletas'];
            $gols_marcados = $_POST['gols_marcados'];
            $gols_sofridos = $_POST['gols_sofridos'];
            $cartoes_amarelos = $_POST['cartoes_amarelos'];
            $cartoes_vermelhos = $_POST['cartoes_vermelhos'];
            $situacao = $_POST = $_POST['situacao'];

            //salva o registro na base de dados
            //Forma a instrução
            $query = "INSERT INTO estatisticas (id_confrontos, id_atletas, gols_marcados, gols_sofridos, cartoes_amarelos, cartoes_vermelhos, situacao) 
            VALUES ('$id_confrontos', '$id_atletas', '$gols_marcados', '$gols_sofridos', '$cartoes_amarelos', '$cartoes_vermelhos', '$situacao')";

            header("Location: cadastro_estatisticas.php");
        }

        $result = $mysqli->query($query) or trigger_error($mysqli->error, E_USER_ERROR);

    }
}
?>

<?php
    include "formCadastraEstatisticas.php";
?>
</div>