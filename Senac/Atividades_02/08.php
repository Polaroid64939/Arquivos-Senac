<?php

function numeros($n1, $n2){
    if($n2 < $n1){
        while($n2 <= $n1){
        echo $n1." - ";
        $n1--;
    } 
}else{
    while($n1 <= $n2){
        echo $n2." - ";
        $n2--;
    }
}

}

numeros(9, 4);  

?>