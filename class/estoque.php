<?php
chdir(__DIR__);
require_once '../interface/interfaceCrud.php';

class Estoque implements interfaceCrud
{

    private $id;
    private $id_produto;
    private $qtd;
    private $local;
    private $limite_min;
    private $produto;

    public function __construct(Produto $objProd = null)
    {
        if(is_object($objProd)){
            $this->produto = $objProd;
        }
    }


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