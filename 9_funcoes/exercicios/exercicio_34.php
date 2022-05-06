<?php
/*
    - Crie uma função que verifica se um número é par ou ímpar;
    - Se for par imprima uma mensagem.
    - Se for impar imprima uma mensagem;
*/
function parImpar($x){
    if($x % 2 == 0){
        echo "Valor: $x é par. <br>";
    } else{
        echo "Valor $x é ímpar. <br>";
    }
}

parImpar(5);
parImpar(10);
parImpar(22125);
parImpar(5.54);
?>