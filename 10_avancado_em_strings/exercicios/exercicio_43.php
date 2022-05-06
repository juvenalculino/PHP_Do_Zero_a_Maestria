<?php
    /*
        - Converta a seguinte string para array;
        - "carro - navio - helicóptero - barco - jangada"
    */

$str = "carro - navio - helicóptero - barco - jangada";
$strArray = explode("-", $str);

for($i = 0; $i < count($strArray); $i++){
    echo "$strArray[$i] <br>";
}

?>