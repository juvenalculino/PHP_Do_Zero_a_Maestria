<?php
/*
    - Crie uma função;
    - Ela deve receber um parâmetro de nome e idade
    - Imprima "Olá  eu sou o Nome e tenho X anos
*/

function pessoa($nome, $idade){
    if(is_string($nome) and is_int($idade)){
    echo "Olá, meu nome é $nome e tenho $idade.<br>";
    } else{
        echo "Nome ou idade estão com tipo de dados diferente.";
    }
}

pessoa("Juvenal", 27);
?>