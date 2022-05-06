<?php
    /*
        - Podemos alterar o case apenas das palavras com funções de PHP;
        - ucfirst - Primeira letra da string em maiúscula;
        - ucwords - Primeira letra da string em minúscula;
    */
    $str0 = "primeira letra da string em minúscula<br>";
    echo ucfirst($str0);
    
    $str1 = "primeira letra de cada palavra em maiúscula<br>";
    echo ucwords($str1);

?>