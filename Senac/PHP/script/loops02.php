<?php
//Fazer uma contagem decrescente de 20 até 1
echo "<h2>======================= While =================================</h2>";
$i = 20;
while($i>0){
    echo $i." - ";
    $i--;
}
echo "<h2>======================= for =================================</h2>";
for($i=20;$i>0;$i--){
    echo " $i - ";
    
    }
    echo "<h2>======================= do while =================================</h2>";


    $x = 0 ;
    do{
    
        echo "$x - ";
        $x = $x + 5;
    
    }while($x<=100);
//Repetir 200x "Eu tenho que estudar php"

echo "<h2>======= Repetir 200x Eu tenho que estudar php =======================</h2>";

$x = 0 ;
do{
    
    echo "$x Eu tenho que estudar php <br>";
    $x = $x + 1;

}while($x<=200);
echo "<h2>==============================</h2>";

?>

