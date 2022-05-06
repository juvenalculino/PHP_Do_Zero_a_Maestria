<?php
/*
    - Com o operador idêntico a verificamos se um valor é igual ao outro, avaliando o seu tipo também;
    - O símbolo é: ===
    - Ex: 5 === 5 #true
    - Ex: 3 === "3" false
*/
if(5 == '5'){
    echo "5 é 5 -> teste 1<br>";
}

//op idêntico
if(5 === '5'){
    echo "5 é 5 -> teste 2<br>";
}

if(5 === 5){
    echo "5 é 5 -> teste 3<br>";
}

if(3 === "teste"){
    echo "É igual -> teste 4<br>";
}

$a = 4;
$b = 4;

if($a === $b){
    echo "A é igual a B.";
}
?>