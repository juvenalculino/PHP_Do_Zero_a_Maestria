<?php
/*
    - Este operador constitui uma estrutura de condição resumida;
    - Na maioria dos casos vamos optar por if/else
    - Porém em situtações simples podemos utilizar o ternário
    - Ex: 5 > 2 ? echo "5 é maior que dois" : echo "5 é menor que 2"
    - A primeira interrogação vem antes da comparação
    - E o : é utilizado para a segunda situação, caso a rimeira seja falsa;
*/

//True
echo 20 > 10 ? "deu true <br>" : "deu false <br>";

//False
echo 20 > 50 ? "deu true <br>" : "deu false <br>";

$a = 10;
$b = 5;

echo $a >= $b ? "Deu true<br>" : "Deu false<br>";

echo $a === $b ? "Deu true<br>" : "Deu false<br>";

echo $a === $b && 10 > 5 ? "Deu true<br>" : "Deu false<br>";
?>