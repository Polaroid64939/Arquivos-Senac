<?php
require '../scripts/conexaoBanco.php';
require '../scripts/funcoesApostilaBD.php';
require '../scripts/funcoesApostila.php';

$sql = "SELECT * FROM usuarios";
$user = $con->prepare($sql);
$user->execute();
$dados = $user->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css.css">
    <title>Document</title>
</head>
<body>
    <h1>Dados dos Usuários</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Capa Apostila</th>
            <th>Titulo da Apostila</th>
            <th>Data da Publicação</th>
            <th>Nome do Arquivo</th>
            <th>Data do Cadastro</th>
            <th colspan="2">Ações</th>
        </tr>

    <?php  foreach($dados as $i){  ?>
        <tr>
            <td><?php echo $i['idusuario']?></td>
            <td><img src="../../img/<?=$i['img']?>" width="40"></td>
            <td><?=$i['nome']?></td>
            <td><?= date("d/m/Y",strtotime($i['dataCad'])) ?></td>
            <td><?=$i['tipoUser']?></td>
            <td><?= date("d/m/Y",strtotime($i['dataCad'])) ?></td>
            <td>
                <a href="../../forms/formUpdateUsuario.php?id=<?=$i['idusuario']?>">Editar</a>
            </td>
            <td><a href="scriptExcluirUsuario.php?id=<?=$i['idusuario']?>&ft=<?=$i['capafoto']?>">Excluir</a></td>
            
        </tr>
    <?php  }?>

        
    </table>   
</body>
</html>