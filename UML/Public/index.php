<?php


require_once '../Models/Cliente.class.php';
require_once '../Models/INvestimento.class.php';

class Main {

    private Cliente $cliente;
    private Investimento $investimento;

    public function __construct(){

        $this->cliente = new Cliente;
        $this->investimento = new Investimento;

        $this->listarCliente();        
    }

    public function listarCliente(){
        $clientes = $this->cliente->listar();

        foreach($clientes as $ind => $cliente){
            $carteira = $this->investimento->carteiraCliente($cliente['id']);

            $totalAtivo = 0;
    
            foreach ($carteira as $cadaAtivo){
                $totalAtivo  += $cadaAtivo['qtd'];
            }

            $clientes[$ind]['totalAtivos'] = $totalAtivo;
        }

        

        require_once '../Views/cliente.listar.php';
    }

}
new Main;