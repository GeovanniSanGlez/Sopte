<?php
require_once("config/conexion.php");
if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
    require_once("models/Usuario.php");
    // $usuario = new Usuario();
    $usuario->login();
}
?>