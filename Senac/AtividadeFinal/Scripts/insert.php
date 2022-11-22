<?php

require 'conexao.php';
require 'funcoes.php';
require 'funcoesbd.php';

$nome = $_POST['nome'];
$dtpubli = $_POST['publi'];
$desc = $_POST['desc'];
$dtCad = date("Y-m-d");

//imagem capa
$imgNome = $_FILES['capa']['name'];
$imgTmp  = $_FILES['capa']['tmp_name'];
$pasta   = "../Img/";
$imgValidos = ['png','jpg','jpeg','PNG','bmp'];

//Arquivo apostila
$ArqNome = $_FILES['apostila']['name'];
$ArqTmp  = $_FILES['apostila']['tmp_name'];
$pasta2   = "../Doc/";
$arqValidos = ['PDF','pdf','DOCX','docx', 'DOC', 'doc'];

$img = salvar_imagem($imgNome,$imgTmp,$imgValidos,$pasta);
$Arq = salvar_arquivo($ArqNome,$ArqTmp,$arqValidos,$pasta2);

$sql = "INSERT INTO apostila(NomeAp, dataPubliAP, DescAp, nomeArqAp, dataCadAp, capaAp) VALUES(?, ?, ?, ?, ?, ?)";
    $obj = $con->prepare($sql); 
    $obj->bindValue(1,$nome);
    $obj->bindValue(2,$dtpubli);
    $obj->bindValue(3,$desc);
    $obj->bindValue(4,$Arq);
    $obj->bindValue(5,$dtCad);
    $obj->bindValue(6,$img);
    if($obj->execute()){
        redirecionar_pagina('Dados cadastrados com sucesso', '../Tabela/tabela_apostila.php');
    }else{
        redirecionar_pagina('Dados Inválidos', '../Forms/form.php');
    }

?>