<?php
require 'conexao.php';
require 'funcoes.php';

$sql = "SELECT * FROM usuarios";


$obj= $con->prepare($sql);

$obj->execute();

echo $obj->rowCount() 

?>