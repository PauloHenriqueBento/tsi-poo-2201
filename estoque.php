<?php

require_once ('class/produto.php');
require_once ('class/estoque.php');

class Main{

    private $produto;
    private $estoque;

    public function __construct()
    {
        $this->produto = new Produto;

        $this->produto->criar(['Melancia']);

        $this->estoque = new Estoque($this->produto);
    }

}

new Main;