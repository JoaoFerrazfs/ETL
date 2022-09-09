<?php
namespace src;

use PHPUnit\Framework\TestCase;
use src\extractor\File;

final class ReaderTest extends TestCase
{
    public function testShouldReadCsvFile()
    {
        // Set
        $file = new File();
        $reader = new Reader($file);


        $reader->setDirectory(__DIR__.'/files');
        $reader->setNameFile('data.csv');

        $expected = $this->getExpectedCsv();

        // Action
        $result = $reader->readFile();

        // Assertion

        $this->assertEquals($expected, $result);

    }

    public function testShouldReadTxtFile()
    {
        // Set
        $file = new File();
        $reader = new Reader($file);

        $reader->setDirectory(__DIR__.'/files');
        $reader->setNameFile('data.txt');

        $expected = $this->getExpectedTxt();

        // Action
        $result = $reader->readFile();

        // Assertion

        $this->assertEquals($expected, $result);

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
    public function getExpectedTxt(): array
    {
        return  [
            [
                "name"=> "Gustavo Santos",
                "cpf"=>"35495984080",
                "email"=>"gustavo.santos@contato.com.br",
            ],
            [
                "name"=>"Marcela Moreira",
                "cpf"=> "99422057051",
                "email"=>"marcela.moreira@contato.com.br"
            ],
            [
            "name"=>"Carlos Silva",
            "cpf"=>"00119677067",
            "email"=>"carlos.silva@contato.com.br",
            ],
            [
            "name"=>"Rosana Marques",
            "cpf"=>"22079999044",
            "email"=>"rosana.marques@contato.com.br",
            ]
            ];
    }

}