<?php
/*
    - normalmente funções retornam algo, para isso utilizamos a instrução return;
    - O objetivo é armazenar o valor de retorno em uma variável e utiliza-lo posteriormenete no código;
    Ex:
        function x(a, b) {
            return alumaCoisa;
        }
*/

function soma($a, $b){
    echo $a + $b . "<br>";
}

soma(5, 9);


function somaReturn($x, $y){
    return $x - $y;
}

echo somaReturn(20, 5);
?>