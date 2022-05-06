<?php
/*
    - Com o else if podemos criar um novo bloco de expressão
    - Este bloco será executado caso o primeiro of seja falso
    - O else if fica entre o if e o else
    - Ex: if(exp){
        } else if(exp){
            
        }
*/
$nota = 6;
if($nota >= 7){
    echo "Aprovado: $nota";
}elseif(($nota < 7) && ($nota >= 4)){
    echo "Recuperacao: $nota";
}else{
    echo "Reprovado: $nota";
}
?>