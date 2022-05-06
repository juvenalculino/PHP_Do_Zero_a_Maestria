<?php
/*
    - Verifique as seguintes operações com or;
    - 12 < 5 or 'joao' === 'joao'
    - 1 < 5 or 1
    - 20 === '20' and 51 >= 31
*/

if(12 < 5 || "joao" === "joao"){
    echo "A operação 1 é verdadeira <br>";
}
if(1 > 5 || 1){
    echo "A operação 2 é verdadeira <br>";
}
if(20 === "20" && 51 >= 31){
    echo "A operação 3 é verdadeira <br>";
}
//operação teste
if(20 == "20" && 51 >= 31){
    echo "A operação teste é verdadeira <br>";
}
?>