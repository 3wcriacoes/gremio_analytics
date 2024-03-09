<?php

class Conexao {

    private $host;
    private $user;
    private $password;
    private $database;
    private $mysqli;

    function Conexao($host, $user, $password, $database) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }

    private function conect() {
        $this->mysqli = new mysqli($this->host, $this->user, $this->password, $this->database);
    }

    private function close() {
        //Desconecta com o banco
        mysqli_close($this->mysqli);
    }

    public function execute($query) {
        $this->conect();
        //Conecta e executa a instrução
        if (mysqli_connect_error()) {
            echo "Falha ao conectar";
        } else {
            $result = $this->mysqli->query($query);
            return $result;
            $this->close();
        }
    }

}
