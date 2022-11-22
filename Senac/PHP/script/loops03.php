<?php
//loop com números de 1 até 252 (while)
//exibir somente números acima de 100
$cont= 1;
while($cont<=252){
    
    if($cont>100 and $cont<=200){
        echo "$cont - ";
    }
    $cont++;
}
echo "<h2>========================================</h2>";
//Mostrar somente os números pares de uma contagem de 3 até 7
$c = 3;
while($c<=70){
    if($c%2==0){
        echo "$c -";
    }
    $c++;
}






?>