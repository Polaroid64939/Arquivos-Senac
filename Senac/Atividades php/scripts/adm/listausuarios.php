<?php

require '../conexao.php';
require '../funcoesBD.php';
require '../funcoes.php'

$sql = "SELECT * FROM usuarios";
$use = $con->prepare();
//Armazenar os dados da consulta em um array
$dados = $user->fetchAll(PDO::FETCH_ASSOC);

foreach($dados as $i){
    echo $i['email']."<br>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../adm/estilo.css">
</head>
<body>
    <table>
        <h1>Dados do usuario</h1>
        <tr>
        <th>id</th>
        <th>Img</th>
        <th>Bome</th>
        <th>E-mail</th>
        <th>senha</th>
        <th>tipo</th>
        <th>data Cadastro</th>
        </tr>
    <?php    foreach($daods as $i){ ?>
        <tr>
            <td><?php echo $i ['idusuario']?></td>
            <td><?</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <?php  } ?>
        <tr>

        </tr>
    </table>
</body>
</html>

