<?php
require __DIR__ . '/Model.class.php';

class Cliente extends Model 
{
    public function __construct()
    {
        parent::__construct();

        $this->tabela = 'clientes';
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