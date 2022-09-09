<?php
namespace src;

use src\extractor\File;

class Reader
{
    private string $directory;
    private string $fileName;
    private File $file;

    public function __construct(File $file)
    {
        $this->file = $file;
    }

    public function getDirectory(): string
    {
        return $this -> directory;
    }

    public function setDirectory(string $directory): void
    {
        $this -> directory = $directory;
    }

    public function getNameFile(): string
    {
        return $this -> fileName;
    }

    public function setNameFile(string $fileName): void
    {
        $this -> fileName = $fileName;
    }

    public function readFile() :array
    {
        $patch = $this->getDirectory().'/'.$this->getNameFile();
        $extension = explode('.', $this->getNameFile());

        $class = '\src\extractor\\'.ucfirst($extension[1]);

        return call_user_func_array(
            [new $class, 'readFile'],
            [$patch]
        );
    }
}