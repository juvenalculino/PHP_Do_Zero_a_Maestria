<?php
/*
    - Com o operador de diferença verificamos se um valor é diferente de outro;
    - O símbolo é: !=
    - Ex: 5!=5 #false
    - Ex: 10!= 5 # true
*/
$a = 3;
$b = 45;

if($a != $b){
    echo "Testando diferenças 1<br>";
}

if($a != 3){
    echo "Testando diferenças 2<br>";
}

if(false != "teste"){
    echo "Testando diferenças 3<br>";
}

if(3 != "3"){
    echo "Testando diferenças 4<br>";
}
?>

