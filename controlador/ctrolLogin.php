<?php

require_once '../modelo/conexion.php';

$CorreoElectronico = $_POST['Correo'];
$Contrasena = $_POST['Contrasena'];


$connection = new PDODB();
$connection->connect();

$InstruccionSQL = "SELECT * FROM registro_usuarios WHERE CorreoElectronico = '".$CorreoElectronico."' and Contrasena = '".$Contrasena."' ";

$resultado = $connection->login($InstruccionSQL);

if ($resultado != false) {
    session_start(); 
    foreach ($resultado as $key => $value) {
        $_SESSION['codU'] = $value['codUsuario'];
        $_SESSION['correoU'] = $value['CorreoElectronico'];
        $_SESSION['contraU'] = $value['Contrasena'];
        $_SESSION['rol'] = $value['codRol'];
    }
    if($_SESSION['rol'] == "1"){
        header("location: ../vista/administracion/menu_usuario.php");
    }elseif ($_SESSION['rol'] == "2") {
        header("location: ../vista/administracion/menu_admin.php");
    }elseif ($_SESSION['rol'] == "3"){
            header("location: ../vista/administracion/menu_evaluador.php");
        }
    }else{
    header("location: ../vista/administracion/check-in.php");
}

?>