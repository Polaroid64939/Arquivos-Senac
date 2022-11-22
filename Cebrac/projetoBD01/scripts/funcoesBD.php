<?php

function cadastrar_usuario($con,$nome,$email,$img,$senha,$dt,$tipo){
    $sql = "INSERT INTO usuarios(nome,email,img,senha,dataCad,tipoUser) VALUES(?,?,?,?,?,?)";
    $user = $con->prepare($sql);
    $user->bindParam(1,$nome);
    $user->bindParam(2,$email);
    $user->bindParam(3,$img);
    $user->bindParam(4,$senha);
    $user->bindParam(5,$dt);
    $user->bindParam(6,$tipo);
    if($user->execute()){
        redirecionar_pagina('Dados cadastrados com sucesso!!!','adm/listaUsuarios.php');
        $con = null;
    }
}


function verificar_email($con,$email){
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $obj = $con->prepare($sql);
    $obj->bindParam(1,$email);
    $obj->execute();
    //estrutura condicional 
    // se linhas > 0 cancelar o cadastro
    if($obj->rowCount() > 0){
        redirecionar_pagina('E-mail já cadastrado!','../forms/formCadUsuario.php');
        $con = null;
        exit;
    }
}

function excluir_usuario($con,$id,$pasta,$img){
    $sql = "DELETE FROM usuarios WHERE idusuario = ?";
     $obj = $con->prepare($sql);
     $obj->bindValue(1,$id);
 
     if($obj->execute()){
         unlink($pasta.$img);
         redirecionar_pagina("Excluído com sucesso","listaUsuariosAdm.php");
     }else{
         echo "Ocorreu um erro";
     }
  
 }
 

?>