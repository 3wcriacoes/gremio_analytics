<?php
include_once "classeAtletas.php";
include_once "config.php";
include_once "conexao.php";

$mysqli = new mysqli($host, $user, $password, $dataBase);

if (mysqli_connect_error()) {
    echo "Falha ao conectar no Banco de Dados";
} else {

    if (isset($_POST['salvar'])) {
        if (@$_POST['id'] == "") {
            $atleta = $_POST['atleta'];
            $apelido = $_POST['apelido'];
            $dt_nascimento = $_POST['dt_nascimento'];
            $posicao = $_POST['posicao'];
            $municipios = $_POST['municipios'];
            $estados = $_POST['estados'];
            $paises = $_POST['paises'];
            $imagem = $_POST['imagem'];

            $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
            $novo_nome = 'Atleta - '.md5(time()).$extensao;
            $diretorio = "img/atletas/";

            move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);

            //salva o registro na base de dados
            //Forma a instrução
            $query = "INSERT INTO atletas (atleta, apelido, dt_nascimento, posicao, municipios, estados, paises, imagem) 
            VALUES ('$atleta','$apelido','$dt_nascimento','$posicao','$municipios','$estados','$paises','$novo_nome')";

            header("Location: cadastro_atletas.php");
        }

        $result = $mysqli->query($query) or trigger_error($mysqli->error, E_USER_ERROR);

    }
}
?>

<?php
    include "formCadastraAtletas.php";
?>
</div>