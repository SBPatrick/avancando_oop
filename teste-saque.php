<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular('Patrick',
    new CPF('156.548.852-12'),
    new Endereco('A', 'B', 'C', '1D')));

$conta->depositar(500);
$conta->sacar(100);

echo $conta->getSaldo();