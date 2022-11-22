<?php

function calculo($n1, $n2){
    $med = ($n1 + $n2) / 2;
    if ($med > 7) {
        echo "<h3>O aluno(a) está aprovado!</h3>";
    } elseif ($med < 7) {
        $med = ($n1 + $n2) / 2;
        echo "<h3>O aluno(a) está reprovado!</h3>";
    }
}


calculo(2, 7);  
?>