<?php
    /*
        - Podemos utilizar alguns valores que executam funções especiais em strings;
        - Precisamos utilizar aspas duplas;
        - Ex: \n = nova linha;
              \t = tab;
              \\ = Barra invertida;
              \$ = Sinal de dolar
    */

header("Content-type: text/plain");


// Pular linha
echo "Isso aqui vai ficar na primeira linha \n e isso na segunda linha.\n";

// Tab
echo "Testando o tab \t aqui. \n";

// Barra invertida
echo "Barra invertida: \\ \n";

// Tab
echo "Imprimindo o dólar \$";


?>