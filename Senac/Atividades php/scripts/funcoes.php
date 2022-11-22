<?php
function redirecionar_pagina($msg,$url){
    echo "<script>alert('$msg')</script>";
    echo "<script>window.location='$url'</script>";
}

function salvar_arquivo($imgNome,$imgTmp,$arqValidos,$pasta){
    //verificar a extensão do arquivo
    $ext = pathinfo($imgNome,PATHINFO_EXTENSION);
    if(in_array($ext,$arqValidos)){
        //gerar nome único
        $novoNome = uniqid().'.'.$ext;
        //mover arquivo para o servidor
        move_uploaded_file($imgTmp,$pasta.$novoNome);
        return $novoNome;
    }else{
     redirecionar_pagina('Arquivo inválido','../forms/formCadUsuario.php');
     exit;
    }
}

function verificar_txt($str1,$str2){
    if($str1!=$str2){
    redirecionar_pagina('Senhas incompativeis!!!','../forms/formCadUsuario.php');
    exit;
    }
    
}
verificar_txt($senha,$senha2);

verificar_txt()

?>