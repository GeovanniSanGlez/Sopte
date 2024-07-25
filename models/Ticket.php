<?php
    class Ticket extends Conectar{

        public function insert_ticket($usu_id,$tick_tipo,$tick_nombre,$tick_ubicacion,$tick_departa,$est,$tick_docadicc,$tick_desc){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_ticket (ticket_id,usu_id,tick_tipo,tick_nombre,tick_ubicacion,tick_departa,est,tick_docadicci,tick_desc) VALUES (NULL,?,?,?,?,?,?,?,'2');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
            $sql->bindValue(2, $tick_tipo);
            $sql->bindValue(3, $tick_nombre);
            $sql->bindValue(4, $tick_ubicacion);
            $sql->bindValue(5, $tick_departa);
            $sql->bindValue(6, $est);
            $sql->bindValue(7, $tick_docadicc);
            $sql->bindValue(8, $tick_desc);
            return $resultado=$sql->fetchAll();
        }

    }
?> 