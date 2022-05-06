<?php
/*  - A principal característica da variável global é ser declarada fora de funções;
    - Por comportamento padrão não são acessíveis dentro de funções;
    - Precisamos utilizar a palavra global para isso;
    - Essa função da variável global não ser acessível dentro de funções previne muitos problemas no software;

*/

$teste = 'asd';

echo "$teste global 1 <br>";

if(5>2){
    echo "$teste if <br>";
}

echo "$teste global 2 <br>";


function funcao() {
    $teste = 'xss';
    echo "$teste local <br>";
}
funcao();


function testandoGlobal(){
    global $teste;
    echo "$teste global função <br>";

}
testandoGlobal();
?>