<?php
chdir(__DIR__);
require_once 'usuario.php';
require_once '../interface/interfaceUsuario.php';

class Cliente extends Usuario implements interfaceUsuario
{
    public function __construct()
    {
        parent::__construct();
        echo "\nConstrutor da classe Cliente\n";
    }

   public function executaXpto(){
       $this->xpto();
   }

    public function acao(array $idProduto):bool
    {
        echo "executar ação cliente";
        return true;
    }
    
}