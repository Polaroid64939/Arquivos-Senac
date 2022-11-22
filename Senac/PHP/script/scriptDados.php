<?php
date_default_timezone_set("America/Manaus");
$hoje = date("d/m/Y");
echo $hoje."<br>";
$hora = date("H:i:s");
echo $hora."<br>";
$diasemana = date("w");
echo $diasemana;

switch($diasemana){
    case 0:
        echo "<br>Domingo";
        break;
    case 1:
        echo "<br>Segunda-feira";
        break;
            case 2:
                echo "<br>Terça-feira";
                break;
                
                    case 3:
                    echo "<br>Quarta-feira";
                    break;

                    case 4:
                        echo "<br>Quinta-feira";
                        break;

                        case 5:
                            echo "<br>Sexta-feira";
                            break;
                        
                    case 6:
                        echo "<br>Sabado";
                        break;
}
echo "<h3>".date("d/m/Y h:i:s")."</h3>"
?>