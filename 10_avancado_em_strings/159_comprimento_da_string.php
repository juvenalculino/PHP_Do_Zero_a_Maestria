<?php
    /*
        - Utilizando a função strlen com uma string como parâmetro, vamos receber o tamanho da string;
        - Ou seja, a quantidade de caracteres da mesma;
        - Ex:
            strlen($string);
    */
$nome1 = "pedro alves alves dos santos";
$nome2 = "joãozito";

echo "o nome: '$nome1' tem " . strlen($nome1) . " letras.<br>";
echo "o nome: '$nome2' tem " . strlen($nome2) . " letras.<br>";

$len1 = strlen($nome1);
$len2 = strlen($nome2);

if($len1 > $len2){
    echo "A string 1 é maior que a string 2.<br>";
} elseif($len2 > $len1){
    echo "A string 2 é maior que a string 1.<br>";
} else{
    echo "Ambas tem tamanhos iguais.";
}
?>