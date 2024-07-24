<?php
    class Ticket extends Conectar{

        public function insert_ticket($usu_id,$tick_tipo,$tick_nombre,$tick_ubicacion,$tick_departa,$est,$tick_docadicc,$tick_desc){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_ticket WHERE est=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }
?>