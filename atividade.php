<?php
class Pessoa{
    public $nome;
    public $idade;

    private $nota;

    public function __construct($nome, $idade, $nota)
    {
     $this->nome = $nome;
     $this->idade = $idade;
     $this->nota = $nota;

    }
    public function apresentar(){
        echo "Olá, sou {$this->nome}";
    }
}
// a classe aluno herda de pessoa e sobreescreve o metodo apresentar

class Aluno extends Pessoa{
    public function apresentar(){
        echo "Oi! Meu nome é {$this->nome} e sou aluno";
    }
}

class Professor extends Pessoa{
    public function apresentar(){
        echo "Oi! Eu sou o professor {$this->nome}";
    }
}

class Diretora extends Pessoa{
    public function apresentar(){
        echo "Oi, Eu sou a Diretora {$this->nome}";
    }
}
class Funcionario extends Pessoa{
    public function apresentar(){
        echo "Oi, Eu sou o inspetor {$this->nome}";
    }
}

$isa = new Aluno ("Isa", 17, 10);
$raul = new Professor ("Raul", 30, 10);
$edivania = new Diretora ("Edivania", 42, 90);
$gean = new Funcionario ("Gean", 37, 50);

$lucas = new Aluno ("Lucas", 17, 10);
$fabio = new Professor ("Fabio", 47, 10);


$isa ->apresentar();
$raul -> apresentar();
$lucas ->apresentar();
$gean -> apresentar();
$edivania -> apresentar();