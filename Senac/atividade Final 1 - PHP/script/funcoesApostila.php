<?php
require 'insertApostila.php';
require 'conexaoBanco.php';

function redirecionar_pagina($mensage,$url){
    echo "<script>alert('$mensage')</script>";
    echo "<script>window.location='$url'</script>";
}

function salvar_arquivo($nomeapostila,$imgTempor,$arquivosValidos,$pasta){
    $ext = pathinfo($nomeapostila,PATHINFO_EXTENSION);
    if(in_array($ext,$arquivosValidos)){
        $novoNome = uniqid().'.'.$ext;
        move_uploaded_file($imgTempor,$pasta.$novoNome);
        return $novoNome;
    }else{
     redirecionar_pagina('Arquivo inválido','../forms/formCadUsuario.php');
     exit;
    }
}
?>