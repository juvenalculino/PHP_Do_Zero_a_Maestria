<?php
/*
    - O continue pula uma execução do loop;
    - Ou seja, quando o interpretador encontrar a instrução, a próxima etapa do loop será executada;
    - Novamente cistumamos aplicar dentro de uma estrutura de condição;

*/
$a = 10;

while($a > 0){
    
    
    if($a == 5 || $a == 7){
        echo "Pulou a execução $a<br>";
        $a--;
        continue;
    };
    if($a == 2){
        echo "Terminando a execução.<br>";
        break;
    }

    echo "Executando o Loop $a<br>";

    $a--;

}


?>