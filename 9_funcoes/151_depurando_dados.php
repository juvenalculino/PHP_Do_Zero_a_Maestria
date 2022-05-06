<?php
/*
    - Utilizamos duas funções para verificar dados formatados;
    - print_r e var_dump
    - As duas apresentam os dados dde forma semelhante
    - Porém var_dump exibe de uma forma "human_readable", traduzindo seria algo como "Para humanos lerem";
*/

$arr = [
    "Teste",
    123,
    1232311.333,
    true,
    [5,4,1],
];

print_r($arr);

echo "<br><br>";

var_dump($arr);
?>