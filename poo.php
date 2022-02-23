<?php

interface User
{
    public function seLogar();
    public function apagar();
}

class Usuario implements User
{
    private $nome = 'Bento';
    private $email;
    private $nascimento;

    public function seLogar()
    {
        echo "Logado :D";
    }

    public function apagar(){

    }
    public function seDeslogar()
    {
        echo "See ya";
    }

    public function setNome($val)
    {
        $this->nome = $val;
    }

    public function getNome()
    {
        return $this->nome;
    }
}


class Professor extends Usuario
{

}

class Turma {

    private $professor;

    public function setProfessor(Professor $prof) {

        $this->professor = $prof;
    }
}

$Paulo = new Professor;
$Paulo->seDeslogar();

//$Paulo = new Usuario;

//$Paulo->seLogar();

//$Paulo->setNome('Paulo');

//var_dump($Paulo);
//echo $Paulo->getNome();

//Usuario::seLogar();


$turma = new Turma;
$turma->setProfessor($Paulo);