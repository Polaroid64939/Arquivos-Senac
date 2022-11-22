<?php
$prod = $_POST['produto'];
$validade = $_POST['validade'];
$qtd = $_POST['qtd'];
$cat = $_POST['categoria'];
$unidade = $_POST['unidade'];

echo "<h3>Nome do produto: $prod</h3><hr>";
echo "<h3>Validade: $validade</h3>";
echo "<h3>Quantidade: : $qtd</h3>";
echo "<h3>Categoria: : $cat</h3>";
echo "<h3>Unidade: : $unidade</h3>";


?>