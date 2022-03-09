<?php

class Sessao
{
    protected $id;
    protected $dispositivo;
    protected $localizacao;
    protected $ult_atualizacao;
    protected $id_usuario;

    public function login(){
        echo "Login efetuado";
    }

    public function destruir(){
        echo "Sessao destruida";
    }

    public function logout(){
        echo "Logout efetuado";
    }

    public function atualizar(){
        echo "Sessao efetuado";
    }
}