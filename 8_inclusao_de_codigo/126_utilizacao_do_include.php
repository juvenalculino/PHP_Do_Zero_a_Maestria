<?php
/*
    - Com o include inserimos um arquivo de PHP, ou até mesmo um HTML, em outro
    - Podendo assim utilizar tudo que está declarado no arquivo incluido;
    - O include não gera erro fatal se o arquivo não existir, e sim um warning;
    - Ex:
        include arquivo.php

*/

include "126_teste_include.php";

?>

<p>Após o include</p>

<p>Imprimindo C <?php echo $c; ?> </p>