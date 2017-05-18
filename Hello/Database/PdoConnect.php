<?php

class PdoConnect
{

    private $conn;

    const DB = [
        'name' =>'php_hello',
        'use' => 'use php_hello',
        'create_database' => 'create database php_hello',
        'create_table' => 'create table alunos( 
            id int(11) auto_increment, 
            nome varchar(200), 
            nota int(11), 
            PRIMARY KEY (id)
        )'
    ];

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $this->conn = new PDO('mysql:host=127.0.0.1',  'root', 'm1sql.');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->conn;
    }

    public function create_database()
    {
        $this->conn->exec(self::DB['create_database']);
    }

    public function create_table()
    {
        $this->conn->exec(self::DB['use']);
        $this->conn->exec(self::DB['create_table']);
    }
}