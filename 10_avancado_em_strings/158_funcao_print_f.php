<?php
    /*
        - A função printf tem a funcionalidade semelhante a print;
        - Porem podemos imprimir valores de forma dinâmica utilizando o simbolo: %;
        - Ex:
            print("Número %d", 1)
    */

$nome = "Juvenal";

// %s -> str
printf("O nome é %s $nome <br>", $nome);

// %d -> int
$idade = 10;
printf("O nome é %s e ele tem %d anos <br>", $nome, $idade);

// %f -> float
$dinheiro = 56.5;
printf("O nome é %s ele tem %d anos e ganhou %.2f reais.<br",$nome, $idade, $dinheiro);
?>