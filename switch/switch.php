<?php 

$prioridade = "alta";

switch ($prioridade) {
    case "baixa":
        echo "O chamado sera atendido em até 72 horas";
        break;

    case "media":
        echo "O chamado sera atendido em até 24 horas";
        break;

    case "alta":
        echo " O chamado será atendido imediatamente";
        break;

        default:
        echo "Prioridade inválida";
    
}


?>