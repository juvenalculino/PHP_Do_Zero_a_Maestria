<?php
    /*
        - Podemos com PHP inverter uma string, a função strrev realiza está ação
        - Ele recebe a string que será invertida como parâmetro;
    */


$palavra = "Testando";
$palInvert = strrev($palavra);

echo "$palavra <br>";
echo "$palInvert <br>";

$frase = "O programador estava com o prazo curto para fazer o sistema.";
$fraInvert = strrev($frase);

echo "$frase <br>";
echo $fraInvert;
?>