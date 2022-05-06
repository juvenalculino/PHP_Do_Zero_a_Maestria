<?php
    /*
        - Podemos converter um array em uma string com a função implode;
        - Passamos primeiro o separador como argumento;
        - Depois a string que vai ser convertida;
    */
$arr = ["amor", "vida", "filhos", "casa"];
$arrStr = implode(",", $arr);
echo "$arrStr<br>";

$arr2 = ["Aviao", "Casa", "Roupa"];
$str2 = implode("<->", $arr2);
echo "$str2 <br>";
?>