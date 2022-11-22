<?php

function calculo($n1, $n2, $f){
    $med = ($n1 + $n2) / 2;
    if ($med > 8 and $f <= 14) {
        echo "<h3>O aluno(a) está aprovado!</h3>";
    }else{
        #$med = ($n1 + $n2) / 2;
        echo "<h3>O aluno(a) está reprovado!</h3>";
    }
}


calculo(9, 8, 11);  
?>