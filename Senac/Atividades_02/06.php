<?php

function parametro($n1, $n2){
    if ($n1 < $n2) {
        while ($n1 <= $n2) {
            echo $n1." - ";
            $n1++;
        }
    } else {
        while ($n2 <= $n1) {
            echo $n2." - ";
            $n2++;
        }
    }
}

parametro(2, 40);
