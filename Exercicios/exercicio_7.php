<?php
/*
- Crie um arquivo PHP;
- Crie um array com características de uma pessoa;
- Desafio: Faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja;
*/

$array = ['cabelo' => 'preto', 'idade' => 15, 'nome' => 'Juevanal'];
echo $array['idade'];
echo "\n";
if($array['idade'] >= 18){
    echo $array['idade']," é maior de idade";
    echo"\n";
}
else {
    echo "Não é maior";
    echo "\n";
}

?>