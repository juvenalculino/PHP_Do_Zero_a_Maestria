<?php
/*
    - O while é uma estrutura de repetição, pode executar o código n vezes;
    - Até satisfazer a sua condição;
    - Geralmente é necessário um contador para atingir a condição;
    - Ex: while(condicao){
            codigo
            }
*/

//Definição do contador
$x = 0;

//Definição da estrutura
while($x < 10){

    //Corpo do loop
    echo $x . "<br>";

    //Incremento do contador
    $x += 1;
    //ou
    //x++;
}
echo "Continuando código.<br>";

//-------------------------------------------------------------------------
$y = 0;

while($y < 20){
    echo $y . "<br>";
    //Decrementando o contador
    $y++;
}
echo "Continuando código.<br>";

//-------------------------------------------------------------------------


$z = 10;
while($z > 0){
    echo $z . "<br>";
    $z--;
}


echo "Continuando código.<br>";

//-------------------------------------------------------------------------

$a = 10;
while($a > 0){
    if($a % 2 != 0)
    echo $a . "<br>";
    $a--;
}
?>