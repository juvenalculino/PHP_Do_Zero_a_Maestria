<?php
    /*
        - Podemos alterar as strings para maiúsculas ou minúsculas com funções de PHP.
        - strolower - todas as letras minúsculas.
        - stroupper - todas as letras maiúsculas.
    */

$str0 = "está string está em caixa baixa<br>";
echo strtoupper($str0);

$str1 = "ESTÁ STRING ESTÁ EM CAIXA ALTA<br>";
echo strtolower($str1);

?>