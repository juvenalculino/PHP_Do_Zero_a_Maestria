<?php
/*
    - Insira o valor 5 em uma variável, e o valor 3 em outra.
    - Teste os operadores de: igualdade, diferença, idêntico e não idêntico
*/
$a = 5;
$b = 3;

if($a == $b){
    echo "$a é igual a $b - Teste 1<br>";
}

if($a != $b){
    echo "$a é diferente de $b - Teste 2<br>";
}

if($a === $b){
    echo "$a é idêntico a $b - Teste 3<br>";
}

if($a !== $b){
    echo "$a não é idêntico a $b - Teste 4<br>";
}
?>