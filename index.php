<?php

require __DIR__.'/vendor/autoload.php';

use src\Leitor;
use src\extrator\Arquivo;

$arquivo = new Arquivo();
$leitor = new Leitor($arquivo);
$leitor->setDiretorio(__DIR__.'/arquivos');

//-------------------------------------------------     txt
$leitor->setNomeArquivo('dados.txt');
$arrayTxt = $leitor->lerArquivo();

//-------------------------------------------------     csv
$leitor->setNomeArquivo('dados.csv');
$arrayCsv = $leitor->lerArquivo();

echo '<pre>';
print_r(array_merge($arrayTxt, $arrayCsv));
echo '<pre>';

