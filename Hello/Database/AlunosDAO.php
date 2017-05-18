<?php

require_once 'PdoConnect.php';

class AlunosDAO
{

    private $conn;

    public function __construct()
    {
        $conn = new PdoConnect();
        $this->conn = $conn->connect();
    }

    public function insert_alunos()
    {
        $this->conn->exec("INSERT INTO php_hello.alunos (nome, nota) VALUES ('Joaozinho', 2)");
        $this->conn->exec("INSERT INTO php_hello.alunos (nome, nota) VALUES ('Marizinha', 9.5)");
        $this->conn->exec("INSERT INTO php_hello.alunos (nome, nota) VALUES ('Pedrinho', 7.1)");
        $this->conn->exec("INSERT INTO php_hello.alunos (nome, nota) VALUES ('Fernandinho', 5.4)");
    }

    public function fetch_all_alunos()
    {
        $stmt = $this->conn->prepare('select id, nome, nota from php_hello.alunos');
        $stmt->execute();

        return $stmt->fetchAll(
            PDO::FETCH_ASSOC
        );
    }
}