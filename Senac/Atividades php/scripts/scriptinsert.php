<?php
require 'conexao.php';
require 'funcoes.php';
require 'funcoesBD.php';

$nome   = $_POST['nome'];
$email  = $_POST['email'];
$senha  = md5($_POST['senha']);
$senha2 = md5($_POST['senha2']);
$tipo   = $_POST['tipo'];
$dt     = date("Y-m-d");

//armazenar imagem
$imgNome = $_FILES['file']['name'];
$imgTmp = $_FILES['file']['tmp_name'];
$pasta = "../img/";
$arqValidos = ['png','jpg','jpeg','PNG','bmp'];

$img = salvar_arquivo($imgNome,$imgTmp,$arqValidos,$pasta);




if($user->execute()){
    redirecionar_pagina('Dados cadastrados com sucesso!!!','../forms/formCadUsuario.php');
}



cadastrar_usuario($con,$nome,$email,$img,$senha,$dt,$tipo);
?>