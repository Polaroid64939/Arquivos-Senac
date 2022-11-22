<?php
require 'conexao.php';
require 'funcoes.php';
$id    = $_POST['id'];
$nome  = $_POST['nome'];
$email = $_POST['email'];
$tipo  = $_POST['tipo'];

$sql ="UPDATE usuarios SET nome = ?, email = ?,tipoUser = ? WHERE idusuario = ? ";
$obj = $con->prepare($sql);
$obj->bindValue(1,$nome);
$obj->bindValue(2,$email);
$obj->bindValue(3,$tipo);
$obj->bindValue(4,$id);

if($obj->execute()){
    redirecionar_pagina("Atualização completa!","../scripts/adm/listaUsuariosAdm.php");
}




?>