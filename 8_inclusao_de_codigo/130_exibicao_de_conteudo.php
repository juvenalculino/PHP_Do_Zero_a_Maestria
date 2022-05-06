<?php
/*
    - Com uma técnica semelhante ao short tags, podemos exibir conteúdo sem o echo;
    - Ótima estratégia para resumir as chamadas PHP apenas para exebição de valores;
    Ex:
        <?="Teste";?>
*/
$nome = "Juvenal";

?>

<form action="">
    <div>
        <input type="text" value="<?=$nome;?>">
    </div>
        
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>