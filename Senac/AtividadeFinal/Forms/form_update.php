<?php
require '../Scripts/conexao.php';
$id = $_GET['id'];

$sql ="SELECT NomeAp, dataPubliAP, DescAp FROM apostila WHERE idapostila = ?";
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
    <link rel="stylesheet" href="../Css/estilo.css  ">
</head>
<body>

    <form action="../Scripts/update.php" method="POST">
    <label for="">Nome:</label>
    <input type="text" name="nome" value="<?=$dados['NomeAp']?>">
    <label for="">Data Publicação:</label>
    <input type="date" name="publi" value="<?=$dados['dataPubliAP']?>">
    <label for="">Descrição:</label>
    <input type="text" name="desc" value="<?=$dados['DescAp']?>">
    <input type="hidden" name="id" value="<?=$id?>"><br><br>    
    <input type="submit" value="Atualizar">
    </form>

</body>
</html>