<?php
chdir(__DIR__);
require_once '../interface/interfaceCrud.php';

class Categoria implements interfaceCrud
{

    protected $id;
    protected $nome;


    public function criar(array $dados):bool
    {
        echo "\nCriado categoria\n";
        return true;
    }

    public function apagar(int $id):bool
    {
        echo "\nApagado categoria\n";
        return true;
    }

    public function editar(int $id, array $dados):bool
    {
        echo "\nEditado categoria\n";
        return true;
    }

    public function listar(int $id = null):array
    {
        echo "\nlistado categoria\n";
        return [];
    }
}