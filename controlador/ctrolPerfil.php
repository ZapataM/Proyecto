<?php

require_once '../modelo/conexion.php';

$metodo = $_POST['metodo'];

switch ($metodo){ 
    case 'g':
        guardarPerfil();
        break;
    case 'm':
        modificarPerfil();
        break;
    case 'e':
        eliminarPerfil();
        break;
    case 'l':   
        listarPerfil();
        break;
    case 'c':
        consultarPerfil();
    break;              
}

function guardarPerfil(){
    $connection = new PDODB();
    $connection->connect();
    $nombApell = $_POST['nombApell'];
    $ocupacion = $_POST['ocupacion'];
    $genero2 = $_POST['genero2'];
    $ciudad = $_POST['ciudad'];
    $escuela = $_POST['escuela'];
   
    $sql = "INSERT INTO perfil(codPerfil,Nombres_apellidos,Ocupacion,Genero,Ciudad,Escuela) VALUES (null,'".$nombApell."', '".$ocupacion."', '".$genero2."', '".$ciudad."', '".$escuela."')";
    $guardado = $connection->executeInstruction($sql);
    if ($guardado){
        echo "Guardado Correctamente";
    }
    else {
        echo "No fue guardado correctamente";
    }
}

function listarPerfil(){
    $connection = new PDODB();
    $connection->connect();
    $sql = "SELECT * FROM perfil";
    $lista = $connection->getData($sql);
    foreach ($lista as $key) {
        echo'<ul>
            <li class="pt-3-half" contenteditable=="false"> '.$key['codPerfil'].'</li>
            <li class="pt-3-half" contenteditable=="false"> '.$key['Nombres_apellidos'].'</li>
            <li class="pt-3-half" contenteditable=="false"> '.$key['Ocupacion'].'</li>
            <li class="pt-3-half" contenteditable=="false"> '.$key['Genero'].'</li>
            <li class="pt-3-half" contenteditable=="false"> '.$key['Ciudad'].'</li>
            <li class="pt-3-half" contenteditable=="false"> '.$key['Escuela'].'</li>
        </ul>';
    }
}

?>