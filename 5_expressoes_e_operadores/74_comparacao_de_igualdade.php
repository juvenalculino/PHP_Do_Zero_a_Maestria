<?php
/*
    - Com o operador de igualdade verificamos se um valor é igual ao outro;
    - O símbolo é: ==
    - Ex: 5 == 4 - false
    - Ex: 3 == 3 - true
*/
if(3 == 3){
    echo "Comparação verdadeira 1.";
}
if(3 == 4){
    echo "Comparação Verdadeira 2.";
}

$a = 12;
$b = 12;
$c = 100;

if($a == $b){
    echo "Comparação Verdadeira 3.";
}

if($a == $c){
    echo "Comparação Verdadeira 4.";
}

$nome = 'Juvenal';
$nomeSistema = "Juvenal";

if($nome == $nomeSistema){
    echo "O nome coincide";
}
?>