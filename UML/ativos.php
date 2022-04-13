<?php

class Ativo 
{
    protected $id;
    protected $nome;

    public function criar(array $dados):bool
    {
        echo "\nCriado Ativo\n";
        return true;
    }
 
    public function apagar(int $id):bool
    {
        $arrayInvestimento = 0;
        $validador = $this->safe_delete($arrayInvestimento);

        if($validador){
            echo "\nApagado Ativo\n";
            return true;
        } else {
            echo "não pode ser apagado";
            return false;
        }
        
    }

    public function atualizar(int $id, array $dados):bool
    {
        echo "\nAtivo Atualizado\n";
        return true;
    }

    public function listar (int $id = null):array
    {
        echo "\nListar Ativos\n";
        return [];
    }

    public function safe_delete($uso)
    {
        if($uso){
            echo 'pode deletar';
            return true;
        } else {
            echo 'ativo em uso';
            return false;
        }
    }
}