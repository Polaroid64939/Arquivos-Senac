<?php

$n1     = $_POST['n1'];
$n2     =$_POST['n2'];
$op     =$_POST['op'];

echo "Número 01: $n1, Número 02: $n2 e Operação $op<br><br>";
echo var_dump($n1)."<br>";
echo var_dump($op);

/*if($op == '+'){
    #$soma - $n1 + $n2;
   # echo "<h3>O resultado da soma é $soma</h3>";
}
elseif($op == '-'){
    #$rs = $n1 - $n2;
   # echo "<h3>O resultado da Subtração é $rs</h3>";
 }elseif($op == '*'){
    # $rs = $n1 * $n2;
    # echo "<h3>O resultado da Multiplicação é $rs</h3>";
 }elseif($op == '/'){
     if($n2==0){
         echo "<h2>Impossível resultado desta operação</h2>";
     }else{
       #  $rs = $n1 / $n2;
         #$rs = number_format($rs,2,',','.');
         #echo "<h3>O resultado da Divisão é $rs</h3>";
     }
 }*/

switch($op){
    case '+': 
        $resultado = $n1 + $n2;
        break;
        
        case '-':
        $resultado = $n1 - $n2;
        break;

        case '*':
            $resultado = $n1 - $n2;
            break;
        
            case '/':
                if($n2===0){
                    $resultado = "Não é possível calcular!";
                }else{
                    $resultado = $n1 - $n2;
                    
            }
                break;

                default:
                    $resultado = "Operação incorreta!";
}
/*echo "<h3>O resultado é = $resultado</h3>"

$soma = $n1 + $n2;

echo "<h3>O resultado da soma é $soma</h3>";
echo var_dump($soma);*/

?>