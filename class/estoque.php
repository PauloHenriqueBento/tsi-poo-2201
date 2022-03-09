<?php
chdir(__DIR__);
require_once '../interface/interfaceCrud.php';

class Estoque implements interfaceCrud
{

    protected $id;
    protected $id_produto;
    protected $qtd;
    protected $local;
    protected $limite_min;


    public function criar(array $dados):bool
    {
        echo "\nCriado estoque\n";
        return true;
    }

    public function apagar(int $id):bool
    {
        echo "\nApagado estoque\n";
        return true;
    }

    public function editar(int $id, array $dados):bool
    {
        echo "\nEditado estoque\n";
        return true;
    }

    public function listar(int $id = null):array
    {
        echo "\nlistado estoque\n";
        return [];
    }

    public function avisoLimiteMin(){
        
    }
}