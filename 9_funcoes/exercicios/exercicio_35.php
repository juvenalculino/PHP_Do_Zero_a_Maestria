<?php
/*
    - Crie uma função que recebe um número
    - Retorne um vakor deste número ao quadrado
*/

function numQuadrado($x){
    $resultado = $x ** 2;
    return $resultado;
}

echo numQuadrado(33) . "<br>";

$num = numQuadrado(8);

echo $num . "<br>";
?>