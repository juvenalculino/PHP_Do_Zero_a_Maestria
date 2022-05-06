<?php
    /*
        - Crie uma função que recebe características de algum array associativocomo argunmento (carro, sofá, cafeteria), em array associativo;
        - O array deve conter nome => peco;
        - Retorne apenas os itens que custam mais que R$10;
        - Imprima o retorno;
    */

    $arr = [
        "porta" => 100,
        "macaneta" => 5,
        "motor" => 2000,
        "retrovisro" => 8
    ];

    function itensCarro($arr){
        $arrItensCaros = [];

        foreach($arr as$item => $preco){
            if($preco > 10){
                array_push($arrItensCaros, $item);
            }
        }

        return $arrItensCaros;
    }
    $novoArr = itensCarro($arr);
    print_r($novoArr)
?>