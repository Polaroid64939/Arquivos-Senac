<?php

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

if($n1<$n2){
    while($n1<=$n2){
        echo "<h3>$n1</h3>";
        $n1++;
    }
}else{
    while($n2<=$n1){
        echo "<h3>$n2</h3>";
        $n2++;
    }
}

?>