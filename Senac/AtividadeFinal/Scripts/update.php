<?php

require 'conexao.php';
require 'funcoes.php';

$id    = $_POST['id'];
$nome = $_POST['nome'];
$dtpubli = $_POST['publi'];
$desc = $_POST['desc'];


$sql ="UPDATE apostila SET NomeAp = ?, dataPubliAP = ?, DescAp = ? WHERE idapostila = ? ";
$obj = $con->prepare($sql);
$obj->bindValue(1,$nome);
$obj->bindValue(2,$dtpubli);
$obj->bindValue(3,$desc);
$obj->bindValue(4,$id);

if($obj->execute()){
    redirecionar_pagina("Atualização completa!","../Tabela/tabela_apostila.php");
}



?>