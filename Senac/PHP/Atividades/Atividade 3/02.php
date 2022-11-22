<?php
$n1 = _GET['n1'];
$n2 = _GET['n2'];

if($n1<$n2){
    $menor = $n1;
    $maior = $n2;
}else{
    $menor = $n2;
    $maior = $n1;
}

while($menor<=$maior){
    if($menor%2==0){
        echo"$menor <br>";
    }
    $menor++;
}
?>