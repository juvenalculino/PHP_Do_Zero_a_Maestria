<?php
/* 
    - Podemos validar se um dado é inteiro com a função is_int();
    - Caso um número seja inteiro, será retornado true (um outro tipo de dado);
    - Caso não seja, receberemos um retorno de false (tipo de dado também);
    - Precisaremos utilizar uma estrutura if para validar o valor;
*/
if(is_int(5)){//true
    echo 'É um inteiro.';
}

echo "<br>";
$b = 10;

if(is_int($b)){//true
    echo 'É um inteiroo.';
}
?>