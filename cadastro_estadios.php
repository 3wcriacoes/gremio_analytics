<?php
include_once "classeEstadios.php";
include_once "config.php";
include_once "conexao.php";

$mysqli = new mysqli($host, $user, $password, $dataBase);

if (mysqli_connect_error()) {
    echo "Falha ao conectar no Banco de Dados";
} else {

    if (isset($_POST['salvar'])) {
        if (@$_POST['id'] == "") {
            $nome_do_estadio = $_POST['nome_do_estadio'];
            $apelido_do_estadio = $_POST['apelido_do_estadio'];
            $capacidade = $_POST['capacidade'];
            $proprietario = $_POST['proprietario'];
            $dt_fundacao = $_POST['dt_fundacao'];
            $situacao = $_POST['situacao'];
            $municipios = $_POST['municipios'];
            $estados = $_POST['estados'];
            $paises = $_POST['paises'];
            $historia = $_POST['historia'];
            $imagem = $_POST['imagem'];

            $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
            $novo_nome = 'Estadio - '.md5(time()).$extensao;
            $diretorio = "./img/estadios/";

            move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);

            //salva o registro na base de dados
            //Forma a instrução
            $query = "INSERT INTO estadios (nome_do_estadio, apelido_do_estadio, capacidade, proprietario, dt_fundacao, situacao, municipios, estados, paises, historia, imagem) 
            VALUES ('$nome_do_estadio','$apelido_do_estadio','$capacidade','$proprietario','$dt_fundacao','$situacao','$municipios','$estados','$paises','$historia','$novo_nome')";

            header("Location: cadastro_estadios.php");
        }

        $result = $mysqli->query($query) or trigger_error($mysqli->error, E_USER_ERROR);

    }
}
?>

<?php
    include "formCadastraEstadios.php";
?>
</div>