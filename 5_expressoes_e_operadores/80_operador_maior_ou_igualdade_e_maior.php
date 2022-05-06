<?php
/*
    - Com o operador maior que verificamos se um valor é maior que outro
    - O símbolo é: >
    - Ex: 5 > 4; # true
    - Com o operador maior ou igual a verificamos se um valor é maior ou igual a outro
    - O símbolo é: >=
    - Ex: 5 >= 5 # true
*/
$a = 4;
$b = 5;
$c = 6;
$d = 6;
$e = 7;

if($a > $b){
    echo "A é maior que B - Teste 0<br>";
}
if($b > $a){
    echo "B é maior que A - Teste 1<br>";
}

if($a > $b){
    echo "A é maior que B - Teste 2<br>";
}
if($d >= $c){
    echo "D é maior que C - Teste 3<br>";
}
if($d >= $a){
    echo "D é maior que A - Teste 4<br>";
}
if($d >= $e){
    echo "D é maior que E - Teste 5<br>";
}
?>