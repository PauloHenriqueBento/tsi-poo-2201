<?php
chdir(__DIR__);
require_once '../interface/interfaceCrud.php';

class Produto implements interfaceCrud
{

    protected $id;
    protected $nome;
    protected $descricao;
    protected $preco;
    protected $id_categoria;


    public function criar(array $dados):bool
    {
        echo "\nCriado produto\n";
        return true;
    }

    public function apagar(int $id):bool
    {
        echo "\nApagado produto\n";
        return true;
    }

    public function editar(int $id, array $dados):bool
    {
        echo "\nEditado produto\n";
        return true;
    }

    public function listar(int $id = null):array
    {
        echo "\nlistado produto\n";
        return [];
    }
}