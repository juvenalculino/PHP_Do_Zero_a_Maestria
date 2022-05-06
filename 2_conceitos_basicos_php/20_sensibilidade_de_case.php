<!--
    Case Sensitivy
    * Significa sensibilidade a casas maiúsculas e minúsculas;
    * Para instruções php não temos essa diferença, ou seja: echo = ECHO;
    * Porém para variáveis são case sensitive;
    * Ou seja, $nome != $NOME;
    Obs: Veremos variáveis em detalhes mais adiante;

-->
// não é case sensitive
<?php
    echo "Teste 1 <br>";
    ECho "Teste 2 <br>";
    ECHO "Teste 3 <br>";

    // é case sensitive
    $nome = 'Juvenal<br>';
    $SOBRENOME = 'culino';
    echo $nome;
    echo $SOBRENOME;
?>

