<?php

function mensagem (){
    echo 'Ola Mundo!!!';
}
/*
mensagem(); //Chamando a funcçao, comando function deve ser chamado apara ser executado corretamente.

echo("<br>");
echo("====================================================");
echo("<br>");
mostrar_data();
mostrar_saudacao();*/

function mostrar_data(){
    echo date("d/m/Y");
    $hora = date("H");
    echo "<br>".$hora;
    echo "<br>";
    echo date_default_timezone_set("America/Manaus");
}
/*echo("====================================================");
echo("<br>");*/

function mostrar_saudacao(){
    $hora = date ("H");
    if ($hora<12){
        echo "Bom dia!!!";
    }elseif($hora<18){
        echo "<h3>Boa tarde!!!</h3>";
    }else{
        echo "<h3>Boa noite!!!</h3>";
    }
}

function boas_vindas($nome){  //para mostrar o nome do usuario
    echo "Seja bem-vindo(a), $nome";

}
/*echo boas_vindas("LucasDosSantos");*/

$n
?>