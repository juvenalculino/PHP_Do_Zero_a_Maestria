<?php
/*
- PHP possui paradigma de orientação a objetos;
- Podemos criar classes e objetos, e o objeto é considerado um tipo de dado;
- Objetos possuem métodos que são suas ações e propriedades que são suas caracteríticas;
- Veremos objetos em maiores detalhes futuramente no curso;
*/
class Pessoa {
    function falar() {
        echo "Ola pessoal!";
    }
}

$juvenal = new Pessoa();
$juvenal->nome = "Juvenal Culino";
echo $juvenal->nome;

echo "\n";

$juvenal->falar();
?>

