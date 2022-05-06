<?php
/*
    - O php e as linguagens de programação executam os operadores na ordem que na matemática;
    - Ou seja em 2+2*4, teremos o resultado de 10;
    - Pois a multiplicação e avaliada antes da soma;
    - Mesmo que na primeira operação seja soma;
    - Podemos utilizar () para seoarar operações;
*/
echo 3 + 2 * 5;
echo "<br>";
echo (3+2) * 5;
echo "<br>";
echo 5+2/10;
echo "<br>";

$a = 5;
$b = 2;
$c = 10;

echo $a + $b / $c;
echo "<br>";
echo $c + $b / $a;
echo "<br>";

$d = $c * $b * $a;
echo $d;
echo "<br>";



?>