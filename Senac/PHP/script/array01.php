<?php
      /* [ 0       1      2        3             4]*/
$ar = ['Manaus','Coari','Tefé','Manacapuru','Parintins'];

echo var_dump($ar);
echo "<h3>==============</h3>";
echo $ar[0];
echo "<h3>==============</h3>";
echo $ar[1];
echo "<h3>==============</h3>";
echo $ar[2];
echo "<h3>==============</h3>";
echo $ar[3];
echo "<h3>==============</h3>";
echo $ar[4];
echo "<h3>==============</h3>";
$qtd = count($ar);
echo "Quantidade Total de cidades: $qtd";
echo "<h3>==============</h3>";
echo '<br>';
//mostrar todos os itens com while
$i = 0;
while($i<$qtd){
echo $ar[$i]."<br>";
$i++;
}
echo "<h3>==============</h3>";
//Mostrar todos os itens com a estrutura for 
for($x=0;$x<$qtd;$x++){
    echo $ar[$x]."<br>";
}
echo "<h3>==============</h3>";
foreach($ar as $j){
    echo "<h4>$j</h4>";
}
?>