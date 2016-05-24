<?php

require_once '../vendor/autoload.php';

$employee = new \Project\Employee();
$employee->setName("Jake, o cão");
$employee->setWage(3500.00);
$employee->setAdmission(new DateTime('2010-04-05', new DateTimeZone("America/Sao_Paulo")));
$employee->setDepartment('Adventure Time');
$employee->setDocument(43072392960);

echo sprintf("O salário anual do Jake, o cão é: %s \n\r", $employee->calculateAnualWage());

$employee->raiseWage(300.00);

echo sprintf("O novo salário anual do Jake, o cão é: %s \n\r", $employee->calculateAnualWage());

//Medical Information
$employee->setLastVisit(new DateTime('2015-04-11', new DateTimeZone("America/Sao_Paulo")));
$employee->setDiseases([]);
$employee->setAbleToWork(true);

echo 3 <=> 2;

isset($king_julius) ? $king_julius : null;
isset($king_julius) ?? $king_julius;

$carro()->array[0]->carro();



