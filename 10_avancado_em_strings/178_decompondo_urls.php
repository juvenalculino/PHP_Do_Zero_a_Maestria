<?php
    /*
        - Com a função parse_url podemos decompor uma URL;
        - Vamos receber um array com todas as partes que a URL tem;
        - Alguns elementos que podem ser retornados são: protocolos, host, parâmetros
    */

$url = "https://www.google.com";
$arrayUrl = parse_url($url);
print_r($arrayUrl);
echo "<br>";

echo $arrayUrl["scheme"];
echo "<br>";

echo $arrayUrl["host"];
echo "<br>";

$url2 = "http://www.horadecodar.com.br/?buscar=query";
$arrayUrl2 = parse_url($url2);
print_r($arrayUrl2);
?>