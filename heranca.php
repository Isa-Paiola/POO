<?php
class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar(){
        echo "Olá, sou {$this->nome} e tenho {$this->idade}";
    }
}

// a classe aluno herdar de Pessoas
class Aluno extends Pessoa{
    public function estudar(){
        echo "{$this->nome} esta estudando";
    }
}

// a classe professor herda de pessoas

class Professor extends Pessoa{
    public function ensinar(){
        echo "Professor {$this->nome} esta Ensinando";
    }
}

// criando objetos
$isa = new Aluno ("Isa", 49);
$nadja = new Professor ("Nadja", 16);
?>