<?php
    /*
        - Com a função strstr podemos encontrar um texto em uma string;
        - Se algo for encontrado, a função vai retornar o resto da string após o texto encontrado;
        - Se não for encontradonada retorna false;
    */
$str = "Testando o resto da string, pra ver se dâ certo.";

$resto = strstr($str, "resto");
echo "$resto<br>"

?>