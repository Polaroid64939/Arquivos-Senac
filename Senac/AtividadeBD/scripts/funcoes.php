<?php
function redirecionar_pagina($msg,$url){
    echo "<script>alert('$msg')</script>";
    echo "<script>window.location='$url'</script>";
}

function salvar_arquivo($imgNome,$imgTmp,$arqValidos,$pasta){
   $ext = pathinfo($imgNome,PATHINFO_EXTENSION);
    if(in_array($arqValidos,$ext)){
       $novoNome = uniqid().'.'.$ext;
        move_uploaded_file($imgTmp,$pasta.$novoNome);
        return $novoNome;
    }else{
     redirecionar_pagina('Arquivo inválido','../forms/CadastroProduto.php');
     exit;
    }
}

?>
