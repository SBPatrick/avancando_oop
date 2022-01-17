<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\EditorDeVideo;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\ControladorDeBonificacoes;

$funcionario1 = new Desenvolvedor('Patrick',
    new CPF('125.563.215-41'), 1000);

$funcionario2 = new Gerente('João',
    new CPF('122.593.211-21'), 3000);

$funcionario3 = new Diretor('Maria',
    new CPF('156.698.555-55'), 5000);

$funcionario4 = new EditorDeVideo('Pedro',
    new CPF('154.685.485-22'), 1500);

$controlador = new ControladorDeBonificacoes();

$funcionario1->sobeDeNivel();

$controlador->adicionaBonificacaoDe($funcionario1);
$controlador->adicionaBonificacaoDe($funcionario2);
$controlador->adicionaBonificacaoDe($funcionario3);
$controlador->adicionaBonificacaoDe($funcionario4);

echo $controlador->getTotal();
