<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$patrick = new Titular('Patrick', new Cpf('123.456.789-10'));
$conta1 = new Conta($patrick);
$conta1->depositar(500);
$conta1->sacar(300);

echo $conta1->getNomeTitular() . PHP_EOL;
echo $conta1->getCpfTitular() . PHP_EOL;
echo $conta1->getSaldo() . PHP_EOL;

$joao = new Titular('João', new Cpf('541.452.315-45'));
$conta2 = new Conta($joao);

echo $conta2->getSaldo();

echo Conta::getNumeroDeContas();