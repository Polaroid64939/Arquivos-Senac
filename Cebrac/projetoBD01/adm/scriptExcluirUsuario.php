<?php
 require '../conexao.php';
 require '../funcoes.php';
 require '../funcoesBD.php';

$id  = $_GET['id'];
$img = $_GET['ft'];
$pasta = '../../img/';

excluir_usuario($con,$id,$pasta,$img);






?>