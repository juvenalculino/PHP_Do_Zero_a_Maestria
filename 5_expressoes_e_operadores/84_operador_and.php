<?php
/*
    - Os operadores lógicos em conjunto dos de comparação também retornam um booleano (true ou false)
    - No caso de AND temos true apenas quando as duas comparações são verdadeiras
    - Simbolo: &&
    Ex: 5 > 2 && 10 < 100 #true

*/
$a = 10;
$b = 5;
$c = 12;
$d = 12;

if($a > $b && $c == $d){
    echo "entrou no if 5 - teste 1<br>";
}

if($b <= $a && $c >= $d){
    echo "entrou no if 6 - teste 2<br>";
}

if($b === $a && $c > $d){
    echo "entrou no if 7 - teste 3<br>";
}
if(($b <= $a && $c >= $d) && $a > $b){
    echo "entrou no if 8 - teste 4<br>";
}

?>