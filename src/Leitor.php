<?php

namespace src;

use src\extrator\Arquivo;

class Leitor
{
    private string $diretorio;
    private string $nomeArquivo;
    private Arquivo $arquivo;

    public function __construct(Arquivo $arquivo)
    {
        $this->arquivo = $arquivo;
    }

    public function getDiretorio(): string
    {
        return $this -> diretorio;
    }

    public function setDiretorio(string $diretorio): void
    {
        $this -> diretorio = $diretorio;
    }

    public function getNomeArquivo(): string
    {
        return $this -> nomeArquivo;
    }

    public function setNomeArquivo(string $nomeArquivo): void
    {
        $this -> nomeArquivo = $nomeArquivo;
    }

    public function lerArquivo() :array
    {
        $caminho = $this->getDiretorio().'/'.$this->getNomeArquivo();
        $extensao = explode('.', $this->getNomeArquivo());

        $classe = '\src\extrator\\'.ucfirst($extensao[1]);

        return call_user_func_array(
            [new $classe, 'lerArquivo'],
            [$caminho]
        );

    }

}