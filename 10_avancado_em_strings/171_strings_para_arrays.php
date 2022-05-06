<?php
/*
    - Podemos converter uma string em array com a função explode;
    - Passamos primeiro o separador como argumento;
    - Depois a string que vai ser convertida;
*/
$frase = "Testando o explode";
$fraseArray = explode(" ", $frase);
print_r($fraseArray);

echo "<br>";

$fraseArray2 = explode(",", $frase);
print_r($fraseArray2);

echo "<br>";

$frase2 = "carro, aviao, barco, navio";
$fraseArray3 = explode(",", $frase2);
print_r($fraseArray3);

echo "<br>";

for($i=0; $i < count($fraseArray3); $i++){
    echo "$fraseArray3[$i] <br>";
}
?>