<?php
require 'conexao.php';
//insset() - verificar variável
//empty() - Verificar se a variável está vazia/null
if($txt = ($_GET['txt'])){
    $txt = $_GET['txt'];
    echo $txt;
    $sql = "SELECT * FROM usuarios WHERE nome LIKE  = ?";
    $obj = $con->prepare($sql);
    $obj->bindValue(1,"%$txt");
    $obj->execute();

    //echo $obj->rowCount();
    $dados = $obj->fetchAll(PDO::FETCH_ASSOC);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa por Usuário</title>
</head>
<body>
    <input action="" method="GET">
        <input type="text" name="txt" placeholder="Informe o nome">
        <input type="submit" value="Pesquisar">
        
        <form>


        </form>
        <?php
            if(isset($dados)){?>
                <table>
                    <?php foreach($dados as $id){?>
                    <tr>
                        <td><?=$i['nome']?></td>
                        <td><?=$i['email']?></td>
                        <td><a href="#">Outras Informações</a></td>
                    </tr>
                </table>
                <?php }?>            
            <?php }?>
</body>
</html>