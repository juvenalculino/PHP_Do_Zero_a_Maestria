<?php
/*
    - Crie variáveis com números e outras com strings
    - Faça um if checando se é um número
    - Caso for, atrribua  a multiplicação deste número por 2 em outra variável
    - E crie um outro if, que checa se o novo número é maior que 100
    - Se sim, imprima uma mensagem
*/
$a = 12;
$b = 59;
$c = "teste";

if(is_int($a) || is_float($a)){
    $multi = $a * 2;

    if($multi > 100){
        echo "O número é maior que 100<br>";
    } else {
        echo "O número não é maior que 100<br>";
    }
} else{
    echo "Não é um número <br>";
}



?>