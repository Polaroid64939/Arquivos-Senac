<?php

function tabuada($n1, $n2, $op){
    switch($op){
        case '+':
            $resultado = $n1 + $n2;
            break;
        case '-':
            $resultado = $n1 - $n2;
            break;
        case '*':
            $resultado = $n1 * $n2;
            break;
        case '/':
            if ($n2 == 0){
                $resultado = "Não dá não man!";
            }else{
                $resultado = $n1 / $n2;
            }
            break;
        default:
            $resultado = "Não é possivel calcular!";
    }
    
    echo "<h3>O resultado é: $resultado</h3>";


}


tabuada(8, 2, '+');








?>