<?php
/*
    - Os dois funcionam da mesma maneira que require e include;
    - Porém impedem que o mesmo arquivo seja adicionado mais de uma vez na página;
    - Este pode ser o método mais indicado quando estamos montando templetes em php;
*/

//Arquivos que não existem
//include_once "teste1.php";

//Arquivo existente
include_once "128_teste2.php"
?>
<p>
    Tesŧando o código
</p>