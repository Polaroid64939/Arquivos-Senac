<?php
require '../scripts/conexao.php';
require '../scripts/funcoesBD.php';
require '../scripts/funcoes.php';

$sql = "SELECT * FROM usuarios";
$user = $con->prepare($sql);
$user->execute();
//Armazenar os dados da consulta em um array
$dados = $user->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilos.css">
    <title>Document</title>
</head>
<body>
    <h1>Dados dos Usuários</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>IMG</th>
            <th>NOME</th>
            <th>E-mail</th>
            <th>Tipo</th>
            <th>Data Cad</th>
            <th colspan="2">Ações</th>
        </tr>

    <?php  foreach($dados as $i){  ?>
        <tr>
            <td><?php echo $i['idusuario']?></td>
            <td><img src="../../img/<?=$i['img']?>" width="40"></td>
            <td><?=$i['nome']?></td>
            <td><?=$i['email']?></td>
            <td><?=$i['tipoUser']?></td>
            <td><?= date("d/m/Y",strtotime($i['dataCad'])) ?></td>
            <td>
                <a href="../../forms/formUpdateUsuario.php?id=<?=$i['idusuario']?>">Editar</a>
            </td>
            <td><a href="scriptExcluirUsuario.php?id=<?=$i['idusuario']?>&ft=<?=$i['img']?>">Excluir</a></td>
            
        </tr>
    <?php  }?>

        
    </table>   
</body>
</html>