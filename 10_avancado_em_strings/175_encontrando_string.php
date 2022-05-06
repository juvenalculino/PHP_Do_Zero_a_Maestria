<?php
    /*
        - Com a função strops podemos encontrar algum texto na string;
        - Se recebermos algum valor é que o texto foi encontrado, e este valor é o índice inicial;
        - Se for retornado false, o texto não está na string;
    */
$str = "Estamos passando por um periodo de grande ansiedade, mesmo sairemos livres da ignorância.";
$encontrar = strpos($str, "grande");
echo "$encontrar<br>";

if($encontrar == true){
    echo "A palavra existe na posição $encontrar.<br>";
} elseif($encontrar == false){
    "A palavra não existe.";
} else{echo "Ocorreu algum erro";}

?>