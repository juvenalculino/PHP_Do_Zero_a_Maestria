<?php
/*
    - Crie uma variável que recebe uma velocidade de um carro
    - Depois crie uma estrutura if que verifica essa velocidade
    - Se a velocidade for menor que 40, imprima que o motorista estava na velocidade correta.
    - Se igual a 40, imprima uma mensagem para o motorista tomar cuidado
    - Se for maior de 40, imprima uma mensagem de multa. 
*/
$vel = 30;
if($vel < 40){
    echo "Motorista  você está dentro da velocidade correta.<br>";
} elseif ($vel == 40){
    echo "Motorista tome cuidado com a velocidade.<br>";
} else{
    echo "Você foi multado.<br>";
}
?>

