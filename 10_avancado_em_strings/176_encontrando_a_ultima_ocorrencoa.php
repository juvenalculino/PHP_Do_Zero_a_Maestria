<?php
    /*
        - Com a função strrpos podemos encontrar a última ocorrência de um texto na string;
        - Se recebermos algum valor é que o texto foi encontrado, e este valor é o índice inicial.
        - Se for retornado false, o texto não está na string;
    
    */

$str = "Testando encontrado palavra teste, em uma string que tem teste";
$palavra = strrpos($str, "teste");
echo "$palavra<br>";

if(strrpos($str, "Java") === false){
    echo "A palavra Java não foi encontrado<br>";
}

$p = substr($str, strrpos($str, "teste"), 5);
echo "$p<br>";
?>