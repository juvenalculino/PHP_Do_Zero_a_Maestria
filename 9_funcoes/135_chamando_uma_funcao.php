<?php
/*
    - Para chamar uma função basta colocar o seu nome e abrir e fechar parênteses;
    - Ex: function teste(){};
    - Algumas funções exigem parâmetros;
    - O ato de chamar uma função também é conhecido como invocar;
    - O PHP tem diversas funções para utilizarmos no nosso código, exemplos:
        strlen, strtoupper, strtolower, print_r, var_dump...
*/

function soma(){
    echo 4 + 5 . "<br>";
}

//Chamando / invocando uma função
soma();

// Função do PHP
echo strtoupper('testando função.');
?>