<?php
/*  - A variável estática é declarada com a instrução static;
    - O valor da mesma é mantido e alterado a cada execução de uma função;
    - É interessante este comportamento pois as variáveis de escopo local sempre são resetadas;
*/
function teste(){
    $a = 0;
    $a++;

    echo "$a <br>";
}
teste();
teste();
teste();

function testandoStatic(){
    static $a = 0;
    $a++;

    echo "$a <br>";
}
testandoStatic();
testandoStatic();
testandoStatic()
?>