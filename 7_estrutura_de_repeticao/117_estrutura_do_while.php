<?php
/*
    - O do while é também uma estrutura de repetição;
    - Porém menos utilizada que o while;
    - A sintaxe é invertida, veja um exemplo:
        do {
            codigo
        } while(condicao);
*/
$j = 0;

do{
    echo "Testando do while $j<br>";

    $j++;
} while($j < 10);

?>