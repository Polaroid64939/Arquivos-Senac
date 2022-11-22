<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$soma = 0;
if($n1>0 and $n2>0){

    if($n1<$n2){
        $menor = $n1;
        $maior = $n2;
    }else{
        $menor = $n2;
        $maior = $n1;
    }
    while($menor<=$maior){
        if($menor%2!=0){
            $soma = $soma+$menor;
            echo "$menor - ";
        }
        $menor++;
    }
echo "<h2>O valor da soma é: $soma</h2>";
}else{
    echo "Por favor, Informe 2 números positivos!!!";
}

?>