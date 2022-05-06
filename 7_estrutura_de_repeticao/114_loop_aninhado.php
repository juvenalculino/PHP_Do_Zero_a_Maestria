<?php
/*
    - Como nas estruturas de if, podemos adicionar um loop dentro de outro;
    - O contador deve ser único, para que um loop não afete o outro
    - O loop interno será executado tantas vezes quanto o loop externo for;
    - E em cada uma das suas execuções, serão passadas todas as suas etapas;
*/
$i = 1;

while($i < 10){
    echo "Loop externo $i<br>";

    //Segundo contador
    $j = 1;
    while($j <= 5){
        echo "----Loop interno -> $j<br>";
        $j++;
    }

    $i++;
}




?>