<?php
/*
    - Podemos criar uma variável com referência a outra;
    - O símbolo para esta função é o =&
    - Se mudamos a variável de referência a referenciada muda o valor e ao contrário também gera a mudança
        $x = 2;
        $y =& $x
*/
$x = 10;

$y =& $x;

echo $x;
echo "<br>";
echo "$y";
echo "<br>";

$y = 15;

echo "Atribuição após o ref1";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$nome = 'Juvenal';
$nome2 =& $nome;

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

?>

