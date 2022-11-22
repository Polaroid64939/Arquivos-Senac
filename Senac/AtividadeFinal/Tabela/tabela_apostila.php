<?php

require '../Scripts/conexao.php';
require '../Scripts/funcoesbd.php';
require '../Scripts/funcoes.php';

$sql = "SELECT * FROM apostila";
$obj = $con->prepare($sql);
$obj->execute();
$dados = $obj->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estilo.css">
    <title>Tabela da Apostila</title>

</head>
<body>
<h1>Dados da Apostila</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data Publicação</th>
            <th>Descrição</th>
            <th>Apostila</th>
            <th>Data de Cadastro</th>
            <th>Capa</th>
            <th colspan="2">Ações</th>
        </tr>
 
    <?php foreach($dados as $i){ ?>
        <tr>
            <td><?php echo $i['idapostila']?></td>
            <td><?=$i['NomeAp']?></td> 
            <td><?=date("d-m-Y", strtotime($i['dataPubliAP']))?></td>
            <td><?=$i['DescAp']?></td>
            <td><?=$i['nomeArqAp']?></td>
            <td><?=date("d-m-Y", strtotime($i['dataCadAp']))?></td>
            <td><img src="../img/<?=$i['capaAp']?>" width="40"></td>
            <td><a href="../Forms/form_update.php?id=<?=$i['idapostila']?>">Editar</a></td>
            <td><a href="../Scripts/excluir.php?id=<?=$i['idapostila']?>&ft=<?=$i['capaAp']?>&doc=<?=$i['nomeArqAp']?>">Excluir</a></td>
        </tr>
    <?php }?>
    </table>
</body>
</html>