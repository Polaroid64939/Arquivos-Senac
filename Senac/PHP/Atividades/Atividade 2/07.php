<?php

$senha1 = $_POST['s1'];
$senha2 = $_POST['s2'];

if($senha1 == $senha2){
    echo "<h3>A senha está correta!</h3>";
}else{
    echo "<h3>A senha está incorreta!</h3>";
}


?>