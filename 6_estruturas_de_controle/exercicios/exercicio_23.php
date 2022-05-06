<?php
/*
    - Complemente o exercício 22
    - Insira um else com uma mensagem para as pessoas que são menores de idade
*/
$idade1 = 16;
$idade2 = 18;
$idade3 = 26;

$maioridade = 18;
$msg1 = "Você é maior de idade <br>";
$msg2 = "Desculpe você é menor de idade<br>";

if($idade1 >= $maioridade){
    echo $msg1;
} else {echo $msg2;}

if($idade2 >= $maioridade){
    echo $msg1;
} else {echo $msg2;}

if($idade3 >= $maioridade){
    echo $msg1;
} else {echo $msg2;}



?>