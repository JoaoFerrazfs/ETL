<?php
namespace src\extractor;

use PHPUnit\Framework\TestCase;
use src\extractor\File;

class CsvTest extends TestCase
{
    public function testShouldReadCsvFile()
    {
        // Set
        $csv = new Csv();
        $patch = "/home/joao/Área de Trabalho/ETL/files/data.csv";
        $expected = $this->getExpectedCsv();

        // Action
        $actual = $csv->readFile($patch);

        // Assertion
        $this->assertEquals($expected, $actual);
    }

    public function getExpectedCsv(): array
    {
        return  [
            [
                "name"=> "Fernanda Silva",
                "cpf"=>"405.986.210-08",
                "email"=>"fernanda.silva@contato.com.br",
            ],
            [
                "name"=>"Emerson Gomes",
                "cpf"=> "069.789.670-68",
                "email"=>"emerson.gomes@contato.com.br"
            ],
            [
                "name"=>"Anderson de Souza",
                "cpf"=>"988.964.910-10",
                "email"=>"anderson.souza@contato.com.br",
            ],
            [
                "name"=>"Ana Paula Simões",
                "cpf"=>"548.516.360-24",
                "email"=>"ana.simoes@contato.com.br",
            ]
        ];
    }
}