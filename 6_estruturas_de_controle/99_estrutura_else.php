<?php
/*
    - A estrutura else pode executar um outro bloco de código, isso acontece quando a expressão de if é falsa
    - Em else não inserimos expressões
    - Ex: if(exp){
        echo "Código";
    } else {
        echo "mensagem";
    }
*/
if(5 > 2){
    echo "Entrou no if 1<br>";
}
else {
    echo "Entrou no else 1<br>";
}


if("teste" === 5){
    echo "Entrou no if 2<br>";
}
else {
    echo "Entrou no else 2<br>";
}

//Variáveis
$a = 10;
$b = 20;

$msg = "Entrou no else 3<br>";

if($a > $b){
    echo "Entrou no if 3<br>";
}
else {
    echo $msg;
}



?>