<?php
    require_once("../config/conexion.php");
    require_once("../models/Ticket.php");
    $ticket = new Ticket();

    switch($_GET["op"]){
        case "insert":
            $ticket->insert_ticket($_POST"usu_id");
            if (is_array($datos)==true and count($datos)>0){
                foreach ($datos as $row){
                    $output["tick_id"] = $row["tick_id"];

        break;
    }
?>