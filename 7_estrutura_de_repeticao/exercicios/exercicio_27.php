<?php
/*
    - Crie um array com alguns valores (pelo menos 10) de tipos de dados diferentes;
    - Faça um loop while para exibir apenas os dados que são strings;
*/

$lista = ['Arvore', 12, 65.8, 'Teste', 1, true, 'Jose', 2, "Amor", false, false];
$a = count($lista);
$y = 0;
while($y < $a){
    if(is_string($lista[$y])) {
        echo $lista[$y] . "<br>";
    }
    $y++;
    
}
?>: