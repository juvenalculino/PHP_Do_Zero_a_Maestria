<?php
/*
    - No PHP temos duas funções interessantes para aprender mais sobre funções;
    - func_get_args = Retrona uma lista com os argumentos de uma função;
    - func_num_args = Retorna o número de argumentos de uma função
*/

function soma($a, $b){
    print_r(func_get_args());
    echo "<br>Número de argumentos: " . func_num_args();

    return $a + $b;
}
soma(2, 4);
?>