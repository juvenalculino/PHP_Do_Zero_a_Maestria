<?php
/*
    - Verifique as seguintes operações com and
    - 15 > 5 and "joao" === "joao"
    - 'teste' > 5 and 1
    - 2 == 3 and 5 >= 3
*/

//comparação 1
if(15 > 5 && "joao" === "joao"){
    echo "A comparação 1 é verdadeira <br>";
}
//comparação 2
if("teste" > 5 && 1){
    echo "A comparação 2 é verdadeira <br>";
}

//comparação teste
if(10 > 5 && 1){
    echo "A comparação teste é verdadeira <br>";
}
//comparação 3
if(2 == 3 && 1){
    echo "A comparação 3 é verdadeira <br>";
}

?>