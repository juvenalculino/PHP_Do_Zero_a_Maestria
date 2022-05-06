<?php
    /*  - A variável local tem seu escopo definido dentro de uma função;
        - Ela não é acessivcel fora da mesma;
        - O seu valor sempre é resetado quando a função é finalizada;
        - Obs: Veremos funções em detalhes futuramente;
    */

    $x = 10; //Variável global

    function teste() {
        $x = 5;

        echo "$x local <br>";

    }

teste();

echo "$x global <br>";

function testando() {
    $x = 12;
    echo "$x local 2 <br>";
}
$x = 99;

testando();

teste();

echo "$x global <br>";

?>