<?php

function redirecionar_pagina($msg,$url){
    echo "<script>alert('$msg')</script>";
       echo "<script>window.location='$url'</script>";
   }

function salvar_imagem($imgNome,$imgTmp,$imgValidos,$pasta){
    $ext = pathinfo($imgNome,PATHINFO_EXTENSION);
    if(in_array($ext,$imgValidos)){
        $novoNome = uniqid().'.'.$ext;
        move_uploaded_file($imgTmp,$pasta.$novoNome);
        return $novoNome;
    }else{
        redirecionar_pagina('Arquivo inválido','../Forms/form.php');
        exit;
    }
}

function salvar_arquivo($ArqNome,$ArqTmp,$arqValidos,$pasta2){
    $ext2 = pathinfo($ArqNome,PATHINFO_EXTENSION);
    if(in_array($ext2,$arqValidos)){
        $novoNome2 = uniqid().'.'.$ext2;
        move_uploaded_file($ArqTmp,$pasta2.$novoNome2);
        return $novoNome2;
    }else{
        redirecionar_pagina('Arquivo inválido','../Forms/form.php');
        exit;
    }
}




?>