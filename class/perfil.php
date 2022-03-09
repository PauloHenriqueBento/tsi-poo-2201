<?php
chdir(__DIR__);
require_once '../interface/interfaceCrud.php';

class Perfil implements interfaceCrud {
    private $id;
    private $nome;
    private $descricao;
    private $permissao;

    public function criar(array $dados):bool
    {
        echo "\nCriado Perfil\n";
        return true;
    }

    public function apagar(int $id):bool
    {
        echo "\nApagado Perfil\n";
        return true;
    }

    public function editar(int $id, array $dados):bool
    {
        echo "\nEditado Perfil\n";
        return true;
    }

    public function listar(int $id = null):array
    {
        echo "\nlistado Perfil\n";
        return [];
    }

}