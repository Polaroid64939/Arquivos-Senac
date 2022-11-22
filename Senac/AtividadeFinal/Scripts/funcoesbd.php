<?php

function cadastrar_apostila($con, $nome, $dtpubli, $desc, $apostila, $dtcad, $capa){
    $sql = "INSERT INTO apostila(NomeAp, dataPubliAP, DescAp, nomeArqAp, dataCadAp, capaAp) VALUES(?, ?, ?, ?, ?, ?)";
    $obj = $con->prepare($sql); 
    $obj->bindValue(1,$nome);
    $obj->bindValue(2,$dtpubli);
    $obj->bindValue(3,$desc);
    $obj->bindValue(4,$apostila);
    $obj->bindValue(5,$dtcad);
    $obj->bindValue(6,$capa);
    
    if($obj->execute()){
        redirecionar_pagina('Dados cadastrados com sucesso!!', '../Tabela/tabela_apostila.php');
        $con = null;
    }
}

function excluir_apostila($con,$id,$img,$pasta, $pasta2, $arq){
    $sql = "DELETE FROM apostila WHERE idapostila = ? ";
    $del = $con->prepare($sql);
    $del->bindValue(1,$id);
    if($del->execute()){
        unlink($pasta.$img);
        unlink($pasta2.$arq);
        redirecionar_pagina('Dados excluidos com sucesso!!','../Tabela/tabela_apostila.php');
    }
    
    
    }


?>