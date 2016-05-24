<?php

require_once '../vendor/autoload.php';

$employee = new \Project\Employee();
$employee->setName("Finn Mertens, o humano");
$employee->setWage(5500.00);
$employee->setAdmission(new DateTime('2010-04-05', new DateTimeZone("America/Sao_Paulo")));
$employee->setDepartment('Salvar princesas e Combater o mal');
$employee->setDocument(51072347660);

echo sprintf("O salário anual de %s é: %s \n\r", $employee->getName(),  $employee->calculateAnualWage());

$employee->raiseWage(700.00);

echo sprintf("O novo salário anual de %s é: %s \n\r", $employee->getName(), $employee->calculateAnualWage());

//Medical Information
$employee->setLastVisit(new DateTime('2016-05-23', new DateTimeZone("America/Sao_Paulo")));
$employee->setDiseases([]);
$employee->setAbleToWork(true);
