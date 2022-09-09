<?php

require __DIR__.'/vendor/autoload.php';

use src\Reader;
use src\extractor\File;

$file = new File();
$reader = new Reader($file);
$reader->setDirectory(__DIR__ . '/files');

//-------------------------------------------------     txt
$reader->setNameFile('data.txt');
$arrayTxt = $reader->readFile();

//-------------------------------------------------     csv
$reader->setNameFile('data.csv');
$arrayCsv = $reader->readFile();

echo '<pre>';
print_r($arrayTxt);
echo '<pre>';

