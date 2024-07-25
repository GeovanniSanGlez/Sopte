<?php
    require_once("../config/conexion.php");
    require_once("../models/Ticket.php");
    $ticket = new Ticket();

    switch($_GET["op"]){
        case "insert":
            $ticket->insert_ticket($_POST["usu_id"],$_POST["tick_tipo"],$_POST["tick_nombre"],$_POST["tick_ubicacion"],$_POST["tick_departa"],$_POST["est"],$_POST["tick_docadicci"],$_POST["tick_desc"]);
        break;
    }
?>