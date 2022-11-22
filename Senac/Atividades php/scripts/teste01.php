<?php
require 'conexao.php';
require 'funcoes.php';

$email = "tati@gmail.com"

$sql = $con->prepare($sql);
$obj->bindParam(1,$email);
$obj->execute();

echo $obj->rowCount();
//estrutura condicional 

//se rows >0 cancelar o cadastro
if($onj->rowCount()>0){
    redirecionar_pagina('E-mail já cadastrado!','../forms/formCadUsuario.php');
    $con = null
    exit;
}
?>