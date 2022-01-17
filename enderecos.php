<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco1 = new Endereco('Resende', 'CDA', 'Samambaias', '144');
$endereco2 = new Endereco('Quatis', 'B', 'C', '15D');


echo $endereco1->rua;
$endereco1->rua = "Teste";
echo $endereco1->rua;
exit;

echo $endereco1 . PHP_EOL;
echo $endereco2;