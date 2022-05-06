<?php
/*
    - Podemos passar parâmetros para  a função;
    - Estes parâmetros são como variáveis, que são utilizados dentro da função para moldar a sua execução;
    - Não há número máximo de parâmetros;
    - Ex:
        function teste(param1, param2){
            // código
        }
*/

function velocidadeMaxima($vel){
    if(is_int($vel)) {
        echo "O carro atinge a velocidade máxima de $vel Km/h<br>";
    } else{
        echo "Por favor passe um valor inteiro.<br>";
    }
    
}

velocidadeMaxima(98);

// PHP ignora parâmetros desnecessários.
velocidadeMaxima(200, "teste");

// Teremos que passar o parâmetro caso dará erro.
//velocidadeMaxima();

velocidadeMaxima("teste");

?>