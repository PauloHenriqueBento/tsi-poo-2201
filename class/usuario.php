<?php
chdir(__DIR__);
require_once '../interface/interfaceCrud.php';
require_once '../interface/interfaceUsuario.php';

class Usuario implements interfaceCrud, interfaceUsuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $id_perfil;


    public function __construct()
    {
        echo "Construtor da classe Usuário";
    }
    
    protected function xpto()
    {
        echo "\nMétodo XPTO\n";
    }

    public function criar(array $dados):bool
    {
        echo "\nCriado Usuario\n";
        return true;
    }

    public function apagar(int $id):bool
    {
        echo "\nApagado Usuario\n";
        return true;
    }

    public function editar(int $id, array $dados):bool
    {
        echo "\nEditado Usuario\n";
        return true;
    }

    public function listar(int $id = null):array
    {
        echo "\nlistado Usuario\n";
        return [];
    }

    public function acao(array $idProduto):bool
    {
        echo "\nacao genérica para usuário\n";
        return true;
    }
}