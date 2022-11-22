<?php
#Decretar variaveis numericas
$n1 = 12;
$n2 = 41.6;

#Operações aritiméticas
$soma = $n1+$n2;
$sub = $n1+$n2;
$mult = $n1+$n2;
$div = $n1+$n2;


?>
<!-- Após o termino do (?>) que determina o fim do php, -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado das Operações</h1>
    <br><br><h3>O resultado da soma é: <?php echo $soma;?></h3><hr><br>
    <h3>O resultado da soma é: <?php echo $sub;?></h3><hr><br>
    <h3>O resultado da soma é: <?php echo $mult;?></h3><hr><br>
    <h3>O resultado da soma é: <?php echo $div;?></h3><hr><br>
</body>
</html>