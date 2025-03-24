<?php
class Pessoa{
    public $nome;
    public function __construct($nome)
{
    $this->nome = $nome;
    }
public function apresentar (){
     echo "Ola, sou {$this->nome}";
    }
}

// a classe aluno herda de pessoa e sobrescreve o metodo apresentar

class Aluno extends Pessoa{
    public function apresentar(){
        echo "Oi! Meu nome é {$this->nome} e sou aluno";
    }
}

class Professor extends Pessoa{
    public function apresentar(){
        echo "Oi! Eu sou o Professor {$this->nome}";
    }
}


// criando objetos

$isa = new Aluno ("isa");
$raul = new Professor ("raul");

$isa->apresentar();
$raul->apresentar();
?>



