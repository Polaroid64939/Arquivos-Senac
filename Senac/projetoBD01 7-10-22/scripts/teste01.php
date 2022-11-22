<?php
require 'conexao.php';
require 'funcoes.php';


$sql = "SELECT * FROM usuarios";
$obj = $con->prepare($sql);
$obj->execute();
$dados = $obj->fetchAll(PDO::FETCH_ASSOC);

foreach($dados as $i){
    echo $i['nome']."<br>";
} 














?>
