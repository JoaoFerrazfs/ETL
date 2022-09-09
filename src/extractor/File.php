<?php

namespace src\extractor;

class File
{

    private $data = [];

    protected function setData(string $name, string $cpf, string $email ): void
    {
          $this->data[] = [
              'name' => iconv('iso-8859-1','utf-8', $name),
              'cpf' => $cpf,
              'email' => $email
          ];
    }

    public function getData(): array
    {
        return $this->data;
    }

}