<?php
/*
    - O switch é uma estrutura de condição, que pode substituir o if em alguns casos;
    - Podemos adicionar a instrução break, para ele não ser mais executado;
    - Há possibilidade também de adicionar a instrução default, que é executada
      caso nenhuma condição seja satisfeita.
*/

$x = 0;

switch($x){

    //Se x for igual a 0 execute este bloco
    case 0:
        echo "X é igual a 0.<br>";
        break;

    //Todos os cases abaixo também serão executados caso não definamos um break
    case 1:
        echo "X é igual a 1.<br>";
        break;
    default:
        echo "X não é igual a nenhum dos valores mencionados.<br>";

}


//--------------------------------------------------------------------------------
$y = 'Juvenal';

switch($y){

    //Se x for igual a 0 execute este bloco
    case "Juvenal":
        echo "O nome é juvenal.<br>";
        break;

    //Todos os cases abaixo também serão executados caso não definamos um break
    case "João":
        echo "O nome é João.<br>";
        break;
    default:
        echo "O nome mencionado não foi encontrado.<br>";

}



?>