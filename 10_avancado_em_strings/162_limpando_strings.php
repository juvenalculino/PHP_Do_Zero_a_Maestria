<?php
    /*
        - Podemos remover os espaços em branco de uma string com funções de PHP;
        - trim - limpa espaços antes e depois da string
        - ltrim - limpa espaços da parte inicial da string
        - rtrim - limpa espaços da parte final da string
        - Desta forma conseguimos remover os espaços desnecessários inseridos pelo usuário.
    */
$str1 = "    Juvenal    ";
echo "está é a string 1: $str1.<br>";
$str1Limpa = trim($str1);
echo "Está é a string 1: $str1Limpa. <br>";

?>