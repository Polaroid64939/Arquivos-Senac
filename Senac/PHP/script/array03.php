<?php
$estados = [
    'AM'=>'Amazonas<br>',
    'PA'=>'Pará<br>',
    'AC'=>'Acre<br>',
    'RR'=>'Roraima<br>',
    'RO'=>'Rondonia<br>'
];


echo var_dump($estados);
echo "<h3>===================</h3>";
echo $estados['AM']>"<br>";
echo $estados['RR']>"<br>";
//estrutura de repeticção para array associativo
foreach($estados as $chave=>$valor){
    echo "$chave - $valor";
}
?>