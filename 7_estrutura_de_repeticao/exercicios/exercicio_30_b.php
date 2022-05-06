<?php
/*
    - Crie um array de 1 a 10;
    - Utilize um loop for para criar este array;
    - Dica: Você pode utilizar o método array_push(arr, elemento) para inserir um elemento em um array
    - Imprima o arrai criaro com print_r
*/

$arr = [];

for($i = 1; $i <= 10; $i++){
    array_push($arr, $i);
}
print_r($arr)


/*
for($a = 1; $a < 11; $a++){
    print_r("$a<br>");
}
*/

?>