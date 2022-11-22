<?php
require '../scripts/conexaoBanco.php';
require '../scripts/funcoesApostilaBD.php';
require '../scripts/funcoesApostila.php';
$nomeapostila   = $_POST['nome'];
$tipoarquivo   = $_POST['tipo'];
$datapub    = date("d-m-Y");
$datacadastro    = date("d-m-Y");

$ImgApostila = $_FILES['file']['capafoto'];
$ImgTempor = $_FILES['file']['tmp_name'];
$pasta = "../img/";
$arqValidos = ['png','jpg','jpeg','PNG','bmp'];
?>