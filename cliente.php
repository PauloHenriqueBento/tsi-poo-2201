<?php

require_once ('class/cliente.php');

class Main
{

    private $cliente;

    public function __construct()
    {
        $this->cliente = new Cliente;

        $this->cliente->acao([]);

        $this->cliente->executaXpto();

    }
}

new Main;