<?php
/*
    - Crie um loop aue vai até o número 30;
    - O contador deve iniciar com 4;
    - Faça incrementos de 2 em 2 no contador;
    - Utilize o break para parar o loop quando chegar no número 24;
*/
$x = 4;

while($x < 30){
    echo $x . "<br>";
    if($x === 24){

        echo "Terminando o loop.<br>";
        break;
    }
    
    $x+=2;

}


?>: