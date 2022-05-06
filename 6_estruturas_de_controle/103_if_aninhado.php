<?php
/*
    - Podemos também inserir um if dentro de outro
    - Neste caso o segundo bloco precisa apenas ficar dentro do primeiro if
    - Ex: if(exp){
            if(exp){
                echo"teste";
            }
    }
*/


if(20 > 2){
    echo "Entrou no primeiro IF 1<br>";

    if("teste" == "teste"){
        echo "Entrou no segundo IF 1<br>";
    }
}


if(10 > 2){
    echo "Entrou no primeiro IF 2<br>";

    if("teste" != "teste"){
        echo "Entrou no segundo IF 2<br>";
    } else {echo "Entrou no segundo else 2";}
}

?>