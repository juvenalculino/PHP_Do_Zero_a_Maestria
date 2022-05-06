<?php
/*
    - O php em certas opereações muda o tipo de dado de forma implícita;
    - Por exemplo 5 / 2 = 2.5 (gera um float);
    - E 5.5 resulta em 55 (gera uma string), o . é o operador de concatenação;
    - Por isso, temos que tomar cuidado com algumas expressões que podem gerar resultados indesejados;
    - Este recurso é chamado de auto cast;
*/
echo 5/2;
echo "<br>";

if(is_float(5/2)){
    echo "É float <br>";
}

echo 2.3;
echo "<br>";

if(is_float(2.3)){
    echo "É string <br>";
}

$nome = 'Juvenal';
$sobrenome = 'Culino';

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
echo "<br>";
?>