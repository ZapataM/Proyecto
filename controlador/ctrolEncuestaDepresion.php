<?php

require_once '../modelo/conexion.php';

$metodo = $_POST['metodo'];

switch ($metodo) {
        case 'g':
            guardarDepresion();
            break;
        case 'm':
            modificarDepresion();
            break;
        case 'e':
            eliminarDepresion();
            break;
        case 'l':   
            listarDepresion();
            break;
        case 'c':
            consultarDepresion();
        break;
}

function guardarDepresion() {
    $connection = new PDODB();
    $connection->connect();
    $tristeza = $_POST['tristeza'];
    $llorar = $_POST['llorar'];
    $dormir_mal = $_POST['dormir_mal'];
    $nerviosismo = $_POST['nerviosismo'];
    $pesimismo = $_POST['pesimismo'];
    $inseguridad = $_POST['inseguridad'];
    $sql = "INSERT INTO encuesta_depresion(codUsuarios,tristeza,llorar,dormir_mal,nerviosismo,pesimismo,inseguridad) VALUES (null,'".$tristeza."', '".$llorar."', '".$dormir_mal."', '".$nerviosismo."', '".$pesimismo."', '".$inseguridad."' )";
    $guardado = $connection->executeInstruction($sql);
    if ($guardado){
        echo "Guardado Correctamente";
    }
    else {
        echo "No fue guardado correctamente";
    }
}

function modificarDepresion(){
   $connection = new PDODB();
   $connection->connect();
   $nombres = $_POST['nombres'];
   $apellidos = $_POST['apellidos'];
   $genero = $_POST['genero'];
   $documento = $_POST['documento'];
   $fechaNC = $_POST['fechadeNC'];
   $correo = $_POST['correo'];
   $sql = "UPDATE registro_usuarios SET nombres = '".$nombres."',
                                       apellidos = '".$apellidos."',
                                       genero = '".$genero."',
                                       genero = '".$genero."',
                                       documento = '".$documento."',
                                       fechadeNC = '".$fechaNC."',";
}

function listarDepresion(){
    $connection = new PDODB();
    $connection->connect();
    $sql = "SELECT * FROM encuesta_depresion";
    $lista = $connection->getData($sql);

    foreach ($lista as $key) {
        echo '<tr>
            <td class="pt-3-half" contenteditable=="false"> '.$key['codUsuarios'].'</td>
            <td class="pt-3-half" contenteditable=="false"> '.$key['tristeza'].'</td>
            <td class="pt-3-half" contenteditable=="false"> '.$key['llorar'].'</td>
            <td class="pt-3-half" contenteditable=="false"> '.$key['dormir_mal'].'</td>
            <td class="pt-3-half" contenteditable=="false"> '.$key['nerviosismo'].'</td>
            <td class="pt-3-half" contenteditable=="false"> '.$key['pesimismo'].'</td>
            <td class="pt-3-half" contenteditable=="false"> '.$key['inseguridad'].'</td>
            <td>
            <span class= "table-remove"><button onclick="consultarDepresion('.$key['codUsuarios'].') type="button" class="btn btn-warning btn-rounded btn-sm my-0">Cargar</button></span>
            </td>

            <td><span class= "table-remove"><button onclick="eliminarEmocional('.$key['codUsuarios'].') type="button" class="btn btn-danger btn-rounded btn-sm my-0">Eliminar</button></span>
            </td>
        </tr>';
    } 
}

// function eliminar(){
//     $connection = new PDODB();
//     $connection->connect();
//     $codUsuario = $_POST['codUsuario'];
//     $sql = "DELETE FROM registro_usuarios WHERE codUsuario =".$codUsuario;
//     $eliminado = $connection->executeInstruction($sql);
//     $if($eliminado){
//         echo "Eliminado correctamente";
//     }else{
//         echo"No fue eliminado";
//         }
// }

function consultarDepresion(){
    $connection = new PDODB();
    $connection->connect();
    $codComunicacion = $_POST['codUsuario'];
    $sql = "SELECT * FROM registro_usuarios WHERE codUsuario =".$codUsuario;
    $lista = $connection->getData($sql);
    $formHtml="";
    foreach ($lista as $key) {
        $formHtml.="<input type='hidden' class='inputModal' value=".$key['codUsuario']."
        name='codUsuario' id='codUsuario' disable='disable'>   
        <div class='row'>
            <div class='col'>
               <label>Nombres</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
               <input type='text' class='inputModal' value=".$key['Nombres']."
                    name='Nombres' id='Nombres'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>Apellidos</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='text' class='inputModal' value=".$key['Apellidos']."
                    name='Apellidos' id='Apellidos'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>Genero</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='text' class='inputModal' value=".$key['Genero']."
                    name='Genero' id='Genero'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>N° documento</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='number' class='inputModal' value=".$key['Documento']."
                    name='Documento' id='Documento'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>Fecha de nacimiento</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='date' class='inputModal' value=".$key['FechaNC']."
                    name='FechaNC' id='FechaNC'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>Correo electrónico</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='email' class='inputModal' value=".$key['Correo']."
                    name='Correo' id='Correo'>
            </div>
        </div>";
    }
    echo $formHtml;
}
?>