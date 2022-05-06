<?php
/*
    - Com o operador não inêntico a verificamos se um valor é diferente de outro, avalizando o seu tipo também.
    - O símbolo é: !==
    - Ex: 5!== 4 #false
    - Ex: 3!== '3' #true
*/

$a = 3;
$b = 45;

if($a != $b){
    echo "A é diferente de B 1<br>";
}

if($a !== $b){
    echo "A é diferente de B 2<br>";
}

if(1 !== 2){
    echo "Não é idêntico 1.<br>";
}

if(1 !== "1"){
    echo "Não é idêntico 2<br>";
}

if([] !== "abc"){
    echo "Não é idêntico 3<br>";
}
?>