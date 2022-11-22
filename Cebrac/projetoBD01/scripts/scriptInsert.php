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


verificar_email($con,$email);
verificar_txt($senha,$senha2);
$img = salvar_arquivo($imgNome,$imgTmp,$arqValidos,$pasta);
cadastrar_usuario($con,$nome,$email,$img,$senha,$dt,$tipo);


?>