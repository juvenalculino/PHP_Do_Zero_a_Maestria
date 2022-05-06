<?php
/*
    - Com o operador menor que verificamos se um valor é menor que outro
    - O símbolo é: <
    - Ex: 5 < 4; # true
    - Com o operador menor ou igual a verificamos se um valor é menor ou igual a outro
    - O símbolo é: <=
    - Ex: 11 <= 12 # true
*/
$a = 4;
$b = 5;
$c = 6;
$d = 6;
$e = 7;

if($a < $b){
    echo "A é menor que B - Teste 0<br>";
}
if($b < $a){
    echo "B é menor que A - Teste 1<br>";
}

if($a < $b){
    echo "A é menor que B - Teste 2<br>";
}
if($d <= $c){
    echo "D é menor ou igual a C - Teste 3<br>";
}
if($d <= $a){
    echo "D é menor que A - Teste 4<br>";
}
if($d <= $e){
    echo "D é menor que E - Teste 5<br>";
}
?>