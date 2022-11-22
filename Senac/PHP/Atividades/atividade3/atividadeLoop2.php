<?php
function somar($n1,$n2){
    $resultado = $_GET+$_GET;
    return $resultado;
}

somar(1,3);
$total = somar(10,2);
echo "O total da soma é - $total";
echo "<br>";
echo "O dobro da soma é - " .$total*2;

function calcular_percentual($valor, $soma):float{
    $total = $valor + ($soma);
    return $total;
}
?>