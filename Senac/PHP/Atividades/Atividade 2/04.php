<?php

$num = $_POST['n'];
$pos = $num > 0;
$neg = $num < 0;


if($num = $pos){
    echo "<h3>Este número é positivo</h3>";
}else{
    $num = $neg;
    echo "<h3>Este número é negativo</h3>";
}

?>