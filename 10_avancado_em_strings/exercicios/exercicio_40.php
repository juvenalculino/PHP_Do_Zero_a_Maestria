<?php
    /*
        - Percorra a string: "O rato roeu a roupa do rei de roma" a partir de um loop;
        - Imprima o número de letras "a" desta string;
    */

$str = "O rato roeu a roupa do rei de roma";
$contadorDeAs = 0;

for($i=0; $i < strlen($str); $i++){
    echo "$str[$i]<br>";
    

    if($str[$i] === "a"){
        $contadorDeAs++;
    }
    
}
echo "O número de A's é de: $contadorDeAs";
?>