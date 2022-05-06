<?php
/*
    - A foreach também é uma estrutura de repetição;
    - Porém ela é orientada a um array, devemos utilizar um para wue a estrutura se repita em todos os elementos do memso;
    - Ex:
        foreach($array as $item){
            codigo
        }
*/

$nomes = ["Juvenal", "Ana", "Carla", "João"];

foreach($nomes as $nome){
    echo "Nome atual: $nome <br>";

    if($nome == "Carla"){
        echo "Parei em: $nome";
        break;
    }
}
?>