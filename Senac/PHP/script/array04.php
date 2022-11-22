<?php
$frutas = [
    'Maça<br>',
    'Banana<br>',
    'Pepino<br>',
    'Carlos<br>'
];
$i=0;


?>

<ol>
    <?php  while($i<4){ ?>
        <li><?php echo $frutas[$i]?></li>
        <?php $i++; } ?>




</ol>