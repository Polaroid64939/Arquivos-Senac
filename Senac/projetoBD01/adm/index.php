<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Lccation:../forms/formsLogin.php');
}else{
    $id     = $_SESSION['id'];
    $nome   = $_SESSION['nome'];
    $tipo   = $_SESSION['tipo'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador Dados</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Gerenciar Dados</h1>
    <main>
        <div class ="box"><a href="listaUsuariosAdm.php">Listar usuários</a></div>
        <div class ="box"><a href="pesquisa.php">Pesquisar usuários</a></div>
        <div class ="box"><a href="#">Listar Notícias</a></div>
        <div class ="box"><a href="#">Listar Comentários</a></div>
    </main>
</body>
</html>