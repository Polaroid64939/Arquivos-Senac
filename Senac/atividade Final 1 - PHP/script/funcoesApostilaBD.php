<?php
require 'insertApostila.php';
require 'conexaoBanco.php';
function cadastrar_usuario($con,$nomeapostila,$ImgApostila,$datapub,$datacadastro,$tipo){
    $sql = "INSERT INTO usuarios(nomeapostila,ImgApostila,datapub,datacadastro,tipo) VALUES(?,?,?,?,?)";
    $user = $con->prepare($sql);
    $user->bindParam(1,$nomeapostila);
    $user->bindParam(2,$ImgApostila);
    $user->bindParam(3,$datapub);
    $user->bindParam(4,$datacadastro);
    $user->bindParam(5,$tipo);
    if($user->execute()){
        redirecionar_pagina('Dados cadastrados com sucesso!!!','adm/listaUsuarios.php');
        $con = null;
    }
}


function excluir_usuario($con,$id,$pasta,$ImgApostila){
    $sql = "DELETE FROM usuarios WHERE idusuario = ?";
     $obj = $con->prepare($sql);
     $obj->bindValue(1,$id);
 
     if($obj->execute()){
         unlink($pasta.$ImgApostila);
         redirecionar_pagina("Excluído com sucesso","listaUsuariosAdm.php");
     }else{
         echo "Ocorreu um erro";
     }
  
 }
?>