<?php
require 'scripts/conexao.php';
$id = $_GET['id'];

$sql ="SELECT nome,email,tipoUser FROM USUARIOS WHERE idusuario = ?";
$obj = $con->prepare($sql);
$obj->bindValue(1,$id);
$obj->execute();
$dados = $obj->fetch(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

    <form action="../scripts/scriptUpdate.php" method="POST">
    <label for="">Nome:</label>
    <input type="text" name="nome" value="<?=$dados['nome']?>">
    <label for="">E-mail:</label>
    <input type="text" name="email" value="<?=$dados['email']?>">
    <label for="">Tipo de usuário:</label>
    <input type="radio" name="tipo" value="adm" >Adm
    <input type="radio" name="tipo" value="comum" checked>Comum
    <br>
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="submit" value="Atualizar">
    </form>
</body>
</html>