<?php
namespace src\extractor;

use PHPUnit\Framework\TestCase;
use src\extractor\File;

class TxtTest extends TestCase
{
    public function testShouldReadTxtFile()
    {
        // Set
        $txt = new Txt();
        $patch = '/home/joao/Área de Trabalho/ETL/files/data.txt';
        $expected = $this->getExpectedTxt();

        // Action
        $actual = $txt->readFile($patch);

        // Assertion
        $this->assertEquals($expected, $actual);
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