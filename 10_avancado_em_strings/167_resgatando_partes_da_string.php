<?php
    /*
        - Com a função substr, podemos resgatar apenas uma parte da string;
        - EX: substr(str, inicio, fim);
        - Str é a string que vamos procurar algo;
        - Inicio é o índice da palavra ou texto;
        - Fim é o índice final da palavra ou texto;
    */
$str = "Está é minha string";

$minha = substr($str, 9, 5); // STRING PAI, ÍNDICE INICIAL, COMPRIMENTO DA PALAVRA

echo $str . "<br>";

echo $minha . "<br>";


$str2 = "Testando esta string";
$novaString = substr($str2, 8); // OMITIR COMPRIMENTO = PEGAR ATÉ O FIM
echo $novaString . "<br>";


$novaString2 = substr($str2, 8 -3); // COMPRIMENTO NEGATIVO = REMOVER DO ÚLTIMO INDICE
echo $novaString2 . "<br>";
?>