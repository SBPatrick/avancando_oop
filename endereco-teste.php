<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco1 = new Endereco('Resende', 'CDA', 'Samambaias', '144');

echo $endereco1->rua . PHP_EOL;
$endereco1->rua = "Hortências";
echo $endereco1->rua;