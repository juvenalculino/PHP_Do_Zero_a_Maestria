<?php
/*
    - Podemos passar parâmetros que já possuem um valor pré-determinado;
    - Então caso você não passe este parâmetro, o valor default entra em cena;
    - A função será executada normalmente com o valor definido;
    - Ex:
        function teste($a="padrao){
            //código
        }
*/


function teste($a="teste"){
    echo " o valor de A é: $a <br>";
}

teste();
teste("Amor");

// BOA PRÁTICA É INSERIR OS ARGUMENTOS  DEFAULTS POR ÚLTIMO
function testando($a="x", $b){

    echo "O valor de A é: $a e de B é: $b <br>";

}
testando("qqqqqqqqq", "AA");

?>