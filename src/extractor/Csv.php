<?php

namespace src\extractor;

use src\extractor\File;

class Csv extends File
{
    public function readFile(string $patch): array
    {
        $handle = fopen($patch, 'r');
        while (($line = fgetcsv($handle,10000, ';')) !== false ){

            $this->setData($line[0], $line[1], $line[2]);
        }
        fclose($handle);

        return $this->getData();

    }
}