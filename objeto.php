<?php
$aluno = [
    "nome" => "Paiola",
    "idade" => 17,

    "estudar" => function() use (&$aluno){
        echo "{$aluno['nome']} está estudando";
    }

]

?>