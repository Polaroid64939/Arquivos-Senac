<?php
/*
Script desenvolvido na aula do dia 01/09/22
Autor: Lucas Dos Santos

*/
#Comando para exibir textos
echo "Olá, Mundo!!!<br>";
echo "Primeira aula PHP<br>";
echo "Clona Cartão!?<br>";
echo"<hr>";
echo"<h2>Cartão Clonado</h2>";


#Criando variaveis
$curso="Técnico em Informática";
$uc= "Desenvolvimento para Internet";
$ch= 96;
$valor= 1500.99;
$matricula= true;

#Concatenação de dados
echo$curso."<br>";
echo$uc."<br>Nome da Unidade curricular: $uc";
#Exibir o tipo das variaveis
echo"<hr>";
echo "<h2>Variável Curso</h2>";
echo gettype($curso)."<br>";
echo var_dump($curso);

echo"<h2>Variáveil Carga Horaria</h2>";
echo gettype($ch)."<br>";
echo var_dump($ch);

echo"<h2>Variáveil Valor</h2>";
echo gettype($valor)."<br>";
echo var_dump($valor);

echo"<h2>Variáveil Matricula</h2>";
echo gettype($matricula)."<br>";
echo var_dump($matricula)."<hr>";
?>