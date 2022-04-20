<?php
require __DIR__ . '/Model.class.php';

class Ativo extends Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->tabela = 'ativos';
    }

    function inserir(array $dados):?int
    {
        return null;
    }
 
    function atualizar(int $id, array $dados):bool
    {
        return true;
    }

    function apagar(int $id):?array
    {
        return null;
    }

    function listar(int $id = null):?array
    {
        return null;
    }
}