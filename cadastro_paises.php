<?php
                    include "classePaises.php";
                    include "config.php";
                    include "conexao.php";
                    $mysqli = new mysqli($host, $user, $password, $dataBase);

                    if (mysqli_connect_error()) {
                        echo "Falha ao conectar no Banco de Dados";
                    } else {

                        if (isset($_POST['salvar'])) {
                            if (@$_POST['id'] == "") {

                                $id = $_POST['id'];
                                $pais = $_POST['pais'];
                
                                //salva o registro na base de dados
                                //Forma a instrução
                                $query = "INSERT INTO paises (pais) VALUES ('$pais')";

                                header("Location: cadastro_localizacao.php");
                            }

                            $result = $mysqli->query($query)OR trigger_error($mysqli->error, E_USER_ERROR);
                        }
                    }
                    ?>

                    <?php
                    include "formCadastraPaises.php";
                    ?>
                </div>
