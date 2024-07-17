<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=masadepartes","root","");
                return $conectar;
            }catch (Exception$e) {
                print "¡Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
        
    }
?>