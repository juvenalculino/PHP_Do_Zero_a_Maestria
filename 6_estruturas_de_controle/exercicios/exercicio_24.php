<?php
/*
    - Crie algumas variáveis com tipos de dados diferentes: string, int e boolean, por exemplo;
    - Cheque se a variável é um inteiro;
    - Caso sim, apresente uma mensagem confirmando o tipo de dado;
    - Caso não, apresente outra mensagem;
*/

$a = 12;
$b = 'Roda';
$c = [];

if(is_int($a)){
    echo "É um inteiro 1<br>";
} else {echo "Não é um inteiro 1<br>";}

if(is_int($b)){
    echo "É um inteiro 2<br>";
} else {echo "Não é um inteiro 2<br>";}


if(is_int($c)){
    echo "É um inteiro 3<br>";
} else {echo "Não é um inteiro 3<br>";}



?>