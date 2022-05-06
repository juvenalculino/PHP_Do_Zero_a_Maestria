<?php
/*
    - Em php podemos concatenar valores com . (ponto)
    - Concatenar é o ato de juntare vários textos e/ou números em apenas uma string;
    - Não há limitres de quantas expressões pódem ser concatenadas;
*/
echo "Testando a concatenação.";
echo "<br>";
echo "Testando" . "a " . "Concatenação.";
echo "<br>";

$t =  "Testando.";
$c = "Concatenação";
echo $t .  " a " . $c;
echo "<br>";

$marca = "Ferrari";
$motor = "3.0";
$velMax = 200;

echo "O carro da " . $marca . " Tem um motor " . $motor . " e chega uma velocidade de " . $velMax;

?>