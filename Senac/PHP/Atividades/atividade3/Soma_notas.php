<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$soma = 0;
if($n1>6 and $n2<6){

    if($n1<$n2){
        $medi1 = $n1;
        $medi2 = $n2;
    }else{
        $medi2 = $n2;
        $medi1 = $n1;
    }
    while($medi1<=$medi1){
        if($medi2%2!=0){
            $soma = $soma+$medi2;
            echo "$medi2 - ";
        }
        $medi2++;
    }
echo "<h2>O valor da soma é: $soma</h2>";
}else{
    echo "Por favor, Informe 2 números positivos!!!";
}

?>