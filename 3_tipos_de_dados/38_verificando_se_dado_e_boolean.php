<?php
/*
- Podemos utilizar a função is_boolean() para verificar se um dado é um boolean;
- A função recebe um valor como parâmetro;
- Novamente receberemos true ou false, dependendo do dado enviado;
- Precisaremos utilizar uma estrutura if para validar o valor;
*/

$a = true;
if(is_bool($a)){
    echo "É um booleano 1<br>";
}
if(is_bool(0)){
    echo "É um booleano 2<br>";
}
if(is_bool(false)){
    echo "É um booleano 3.<br>";
}
if(is_bool(0==false)){
    echo "É um booleano falso.<br>"
}

?>