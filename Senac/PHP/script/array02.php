<?php

$pc = array('Mouse','Teclado','Monitor','Memória','Processador','SSD','Placa de rede');
echo var_dump($pc);
echo "<h2>==============================</h2>";
//Mostrar a qtd de itens do array
echo sizeof($pc);
echo "<h2>==============================</h2>";
//Mostrar todos os itens do array (foreach)
foreach($pc as $j){
    echo "<h2>$j</h2>";
}
echo "<h2>==============================</h2>";
echo $pc [0];
echo "<br>";
echo $pc [1];
echo "<br>";
echo $pc [2];
echo "<br>";
echo $pc [3];
?> 
