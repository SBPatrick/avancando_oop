<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

$endereco = new Endereco('Resende', 'bairro', 'uma rua', '45A');
$patrick = new Titular('Patrick', new CPF('123.456.789-10'), $endereco);
$conta1 = new Conta($patrick);
$conta1->depositar(500);
$conta1->sacar(300);

echo $conta1->getNomeTitular() . PHP_EOL;
echo $conta1->getCpfTitular() . PHP_EOL;
echo $conta1->getSaldo() . PHP_EOL;

$joao = new Titular('João', new CPF('541.452.315-45'), $endereco);
$conta2 = new Conta($joao);
var_dump($conta2);

$outroEndereco = new Endereco('Rio de Janeiro', 'Bairro A', 'Rua B', '13C');
$conta3 = new Conta(new Titular('Maria', new CPF('564.854.898-45'), $outroEndereco));
echo Conta::getNumeroDeContas();
