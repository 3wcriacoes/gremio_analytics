<?php
include_once "classeTreinadores.php";
include_once "config.php";
include_once "conexao.php";

$mysqli = new mysqli($host, $user, $password, $dataBase);

if (mysqli_connect_error()) {
    echo "Falha ao conectar no Banco de Dados";
} else {

    if (isset($_POST['salvar'])) {
        if (@$_POST['id_treinadores'] == "") {
            $treinador = $_POST['treinador'];
            $apelido = $_POST['apelido'];
            $dt_nascimento = $_POST['dt_nascimento'];
            $situacao = $_POST['situacao'];
            $municipios = $_POST['municipios'];
            $estados = $_POST['estados'];
            $paises = $_POST['paises'];
            $clube_atual = $_POST['clube_atual'];
            $imagem = $_POST['imagem'];

            $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
            $novo_nome = 'Treinador - '.md5(time()).$extensao;
            $diretorio = "img/treinadores/";

            move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);

            //salva o registro na base de dados
            //Forma a instrução
            $query = "INSERT INTO treinadores (treinador, apelido, dt_nascimento, situacao, municipios, estados, paises, clube_atual, imagem) 
            VALUES ('$treinador','$apelido','$dt_nascimento','$situacao','$municipios','$estados','$paises','$clube_atual','$novo_nome')";

            header("Location: cadastro_treinadores.php");
        }

        $result = $mysqli->query($query) or trigger_error($mysqli->error, E_USER_ERROR);

    }
}
?>

<?php
    include "formCadastraTreinadores.php";
?>
</div>