<?php
/*
    - Com os operadores de conversão podemos forçar uma variável ser de um determinado tipo
    - Nem todos são úteis, os mais utilizados são para converter uma string em número
    - Operadores: int, bool, float, string, array, object, unset
    - Ex: $a = (float)"5.34243" # string é convertida para float
*/
$a = (int)"12";

echo $a;
echo "<br>";
echo $a + 10;
echo "<br>";

if($a === 12){
    echo "A é idêntico a 12 <br>";
}

$b = (float)"3.14843824";

if($b === 3.14843824){
    echo "B é idêntico a 3.14<br>";
}

?>