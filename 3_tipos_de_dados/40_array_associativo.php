<?php
/*
- O array associativo é basicamente um array, porém com chave e valor;
- A estrutura base é a mesma, mas vamos construir dessa maneira;
- $arr = ['nome' => 'juvenal', 'iadde' => 29]
- Chave entre aspas, seta para apontar valor e valor;
*/

$arr = ['nome' => 'Juvenal', 'idade' => 29];
echo $arr['nome'];
echo "\n";
$arrAssoc = ['chave' => 'valor', 'bool' => true];
echo "\n";
print_r($arrAssoc);

?>