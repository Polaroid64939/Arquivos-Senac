<?php
$soma = 0;

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
echo "<h2>O valor da soma é: $soma</h2>"

?>
?>