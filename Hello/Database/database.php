<?php

require_once 'PdoConnect.php';
require_once 'AlunosDAO.php';

/*
 * Crie uma conexão com o banco de dados “php_hello”, leia as notas de cada aluno na tabela “alunos”
 * e mostre na tela o aluno, a nota e seu grau excelência.
 * Se a nota maior ou igual a 9, “Excedeu as expectativas”
 * Se a nota maior ou igual a 7 e menor que 9, “Ótimo”
 * Se a nota maior ou igual a 5 e menor que 7, “Bom”
 * Se a nota menor que 5, “Ruim”.
 */
$pdo = new PdoConnect();
$pdo->create_database();
$pdo->create_table();

$alunosDAO = new AlunosDAO();
$alunosDAO->insert_alunos();

foreach ($alunosDAO->fetch_all_alunos() as $aluno) {

    if ($aluno['nota'] >= 9) {
        echo "O aluno {$aluno['nome']} tirou {$aluno['nota']} e excedeu as expectativas" . PHP_EOL;
    }

    if ($aluno['nota'] >= 7 && $aluno['nota'] < 9) {
        echo "O aluno {$aluno['nome']} tirou {$aluno['nota']} e foi ótimo." . PHP_EOL;
    }

    if ($aluno['nota'] >= 5 && $aluno['nota'] < 7) {
        echo "O aluno {$aluno['nome']} tirou {$aluno['nota']} e foi bem" . PHP_EOL;
    }

    if ($aluno['nota'] < 5) {
        echo "O aluno {$aluno['nome']} tirou {$aluno['nota']} e foi mal" . PHP_EOL;
    }
}
