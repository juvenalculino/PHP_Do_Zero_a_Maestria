<?php
/*
    - Crie uma função chamada defineCorCarro;
    - Onde há um parâmetro chamado cor, com valor default de vermelha;
    - Retorne a cor do carro
    - Imprima o retorno tanto com parâmetro default, como também definido a cor
*/

function defineCorCarro($cor="Vermelho"){
    return "A cor do carro é: $cor<br>";

}

echo defineCorCarro();

$car = defineCorCarro("Azul");
echo $car

?>