<?php

require 'conexao.php';
require 'funcoes.php';

$email = $POST['email'];
$senha = md5($POST['senha']);

$sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
$obj = $con->prepare($sql);
$obj->bindValue(1,$email);
$obj->bindValue(2,$senha);
$obj->execute();

if($obj->rowCount()==1){
    echo "Login ok";
    $dados = $obj->fetch(PDO::FETCH_ASSOC);
    $_SESSION['id']= $dados['idusuario'];
    $_SESSION['nome'] = $dados['nome'];
    $_SESSION['tipo'] = $dados['tipóUser'];
    redirecionar_pagina("Login realizado com sucesso!!","../index2.php");
}else{
    redirecionar_pagina("Dados Incorretors", "../forms/formlogin.php");
}
?>