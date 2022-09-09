<?php
namespace src\extractor;

class Txt extends File
{
    public function readFile(string $patch): array
    {
        $handle = fopen($patch, 'r');
        while (!feof($handle)) {
            $line = fgets($handle);
            $this->setData(
                trim(substr($line, 12, 15)), //nome
                trim(substr($line, 0, 11)), //cpf
                trim(substr($line, 28, 50)) // email
            );
        }
        fclose($handle);

        return $this->getData();
    }
}