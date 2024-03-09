<?php
include_once "classeClubes.php";
include_once "config.php";
include_once "conexao.php";

$mysqli = new mysqli($host, $user, $password, $dataBase);

if (mysqli_connect_error()) {
    echo "Falha ao conectar no Banco de Dados";
} else {

    if (isset($_POST['salvar'])) {
        if (@$_POST['id'] == "") {
            $nome_do_clube = $_POST['nome_do_clube'];
            $apelido_do_clube = $_POST['apelido_do_clube'];
            $torcida = $_POST['torcida'];
            $dt_fundacao = $_POST['dt_fundacao'];
            $situacao = $_POST['situacao'];
            $municipios = $_POST['municipios'];
            $estados = $_POST['estados'];
            $paises = $_POST['paises'];
            $estadios = $_POST['estadios'];
            $imagem = $_POST['imagem'];

            $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
            $novo_nome = 'Clube - '.md5(time()).$extensao;
            $diretorio = "img/clubes/";

            move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);

            //salva o registro na base de dados
            //Forma a instrução
            $query = "INSERT INTO clubes (nome_do_clube, apelido_do_clube, torcida, dt_fundacao, situacao, municipios, estados, paises, estadios, imagem) 
            VALUES ('$nome_do_clube','$apelido_do_clube','$torcida','$dt_fundacao','$situacao','$municipios','$estados','$paises','$estadios','$novo_nome')";

            header("Location: cadastro_clubes.php");
        }

        $result = $mysqli->query($query) or trigger_error($mysqli->error, E_USER_ERROR);

    }
}
?>

<?php
    include "formCadastraClubes.php";
?>
</div>