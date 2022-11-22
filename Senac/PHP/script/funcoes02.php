<?php
function somar($n1,$n2){
    $resultado = $n1+$n2;
    return $resultado;
}
somar(1,3);
$media = somar(10,2);
echo "O total da soma é - $total";
echo "<br>";
echo "O dobro da soma é - " .$total*2;

//Criar uma função que calcule qualquer percentual
// de qualquer valor

function calcular_percentual($valor, $perc){
    $total = $valor * ($perc/100);
    return $total;
}
echo "<br>";

echo calcular_percentual(200, 10)."<br>";
$valor2 = 200;
$p = 10;
$percentual = calcular_percentual($valor2,$p);
echo "<h3> valor com desconto e :</h3>"; 
echo $valor2-$percentual;
echo "<h3>O valor do acrescimo é:</h3>";
echo $valor2+$percentual;
echo "<h3> O dobro do percentual é:</h3>";
echo $percentual*2;
?>