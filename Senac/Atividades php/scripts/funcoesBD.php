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
   

?>