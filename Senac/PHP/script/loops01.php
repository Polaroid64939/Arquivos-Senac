<?php
//Loops = Estruturas de repetição ou Laços
//contador
$i = 0;
$soma = 0;
//contagem de 0 até 20
while($i<=200){
    echo $i." - ";
    $soma = $soma + $i;
    $i++;
}
echo "<h3>O valor Atual de i é: $i</h3>";
echo "<h3>O valor Atual da soma é: $soma</h3>";
echo "<h3>============= Do-while =============</h3>";
$x = 0;
do{

    echo $x." - ";
    $x++;

}while($x<=20);
echo "<h3>O valor Atual de i é: $x</h3>";

echo "<h3>============= For =============</h3>";
//Para funcionar é preciso saber quando termina e começa um valor, sem valores indefinidos

for($i=0;$soma<+20;$y++){
    echo $y." - ";
    }



?>