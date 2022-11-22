<?php
///
require 'conexao.php';
require 'funcoes.php';

$nome   = $_POST['nome'];
$email  = $_POST['email'];
$senha  = $_POST['senha'];
$senha2 = $_POST['senha2'];
$tipo   = $_POST['tipo'];
$dt     = date("Y-m-d");

///
$imgNome = $_FILES['file']['name'];
$imgTmp = $_FILES['file']['tmp_name'];
$pasta = "../img/";
$arqValidos = ['.png','.jpg','.jpeg','.PNG','.JPG'];

$img = salvar_arquivo($imgNome,$imgTmp,$arqValidos,$pasta);
///

//
$sql = "INSERT INTO usuarios(nome,email,img,senha,dataCad,tipoUser) VALUES(?,?,?,?,?,?)";
$user = $con->prepare($sql);
$user->bindParam(1,$nome);
$user->bindParam(2,$email);
$user->bindParam(3,$img);
$user->bindParam(4,$senha);
$user->bindParam(5,$dt);
$user->bindParam(6,$tipo);

//
if($user->execute()){
    redirecionar_pagina('Dados cadastrados com sucesso!!!','../forms/formCadUsuario.php');
}else{
    redirecionar_pagina('Problemas ao cadastrar!!!','../forms/formCadUsuario.php');
}

///
?>