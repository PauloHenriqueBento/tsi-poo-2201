<?php

require_once('class/produto.php');

class Main {

    public function __construct()
    {
        $this->produto = new Produto;

        $vetor = [];

        $this->novo($vetor);
    }

    function novo($vetor):void
    {
        if(is_array($vetor)){
            $this->produto->criar($vetor);
        } else {
            throw 'Erro';
        }

    }

    public function __destruct()
    {
        echo "\nDestrutor Executado\n";
    }

}

new Main;
