<?php
/*
    - A estrutura if checa se uma expressão é verdadeira
    - Podemos incluir operadores lógicos nas expressões
    - Ex: if(expressao){//bloco de código}
*/

//Condição Verdadeira
if(5 > 2){
    echo "Deu certo entrou no IF<br>";
}

//Condição Falsa
if(2 >= 5){
    echo "Não vai entrar no IF<br>";
}

//Utilizando operador lógico
if(10 === 10 && 9 > 3){
    echo "Deu certo entrou no teste 2<br>";
}

$a = 10;
$b = 5;

$c = "Deu certo entrou no if 3 <br>";
if($a >= $b){
    echo $c;
}


?>