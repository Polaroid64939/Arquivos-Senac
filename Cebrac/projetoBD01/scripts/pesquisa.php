<?php
require 'conexao.php';

if(isset($_GET['txt'])){
$txt = $_GET['txt'];


$sql = "SELECT * FROM usuarios WHERE nome LIKE ?";
$obj = $con->prepare($sql);
$obj->bindValue(1,"%$txt%");
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
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="txt">
        <input type="submit">
    </form>

    <?php if(isset($dados)){?>

        <table>
            <?php  foreach($dados as $x){?>
                <tr>
                    <td><?=$x['nome']?></td>
                    <td><?=$x['email']?></td>
                    <td>Outras</td>
                </tr>
             <?php }?>   
        </table>

    <?php } ?>

</body>
</html>