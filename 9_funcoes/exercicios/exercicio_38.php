<?php
/*
    - Crie uma função que recebe um array de itens de supermercado;
    - Retorne este array em forma de string, separando por vírgulas;
*/

$lista = ["Arroz", "Trigo", "Macarrão", "Cerveja", "Vinagre"];

function listaParaString($arr){

    $str = "Você levou estes itens do supermercado: ";
    
    for($i=0; $i < count($arr); $i++){
        
        if($i + 1 == count($arr)){
            $str .= "$arr[$i].";
        } else{
            $str .= "$arr[$i],";
        }
    }
    return $str;
}

echo listaParaString($lista);

?>