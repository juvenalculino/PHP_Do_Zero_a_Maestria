<?php
/*
    - Podemos sair de um loop while antes do  seu fim;
    - Para isso é necessário adicionar a instrução break;
    - Após interpretada, o loop será automaticamente finalizado;
    - Geralmente inserimos esta instrução em uma condição if;
*/
$x = 0;

while($x < 10){
    echo "O X é $x <br>";

    if($x === 5){
        echo "Terminando o loop <br>";
        break;
    }
    $x++;
}
echo "Saindo do loop.<br>";
?>