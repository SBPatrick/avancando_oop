<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$funcionario = new Gerente('Maria',
    new CPF('156.698.555-55'), 5000);

$autenticador->tentaLogin($funcionario, 4321);