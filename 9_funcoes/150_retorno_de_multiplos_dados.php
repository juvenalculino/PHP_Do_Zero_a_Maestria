<?php
/*
    - Caso seja necessário retornar vários valores em uma função, podemos formar um array para retorno
    - E então acessar os índeices de forma isolada coma a nova variável que contém o retorno;
    - Ex:
        function teste(){
            return ["a", 10, true];
        }
*/

function aletarDados($nome, $idade){
    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return [$nome, $idade];

}

$dados = aletarDados("Juvenal", 27);
print_r($dados);

echo "<br><br>";

echo "Olá $dados[0], você tem $dados[1]";
?>