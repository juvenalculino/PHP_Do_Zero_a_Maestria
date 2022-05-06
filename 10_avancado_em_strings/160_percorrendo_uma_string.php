<?php
    /*
        - Podemos percorrer cada um dos caracteres de um astring;
        - Para isso vamos utilizar uma estrutura de repetição;
        - E o método strlen, para saber o número de caracteres;
        - Com isso podemos iterar pela string completa.
        - Ex:
            for($x=0; $x < strlen($str); $i ++){
                //codigo
            }
    */

    $str = "Está é uma string muito grande!";

    for($i = 0; $i < strlen($str); $i++){
        echo "$str[$i] <br>";
    }
?>