<?php
 
require 'conexao.php';
require 'funcoes.php';
require 'funcoesbd.php';

$id    =  $_GET['id'];
$img   =  $_GET['ft'];
$pasta = '../img/';
$arq = $_GET['doc'];
$pasta2 = '../Doc/';




echo excluir_apostila($con,$id,$img,$pasta,$pasta2,$arq);




?>