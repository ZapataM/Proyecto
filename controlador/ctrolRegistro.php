<?php

require_once '../modelo/conexion.php';

$metodo = $_POST['metodo'];

switch ($metodo){ 
    case 'g':
        guardarRegistro();
        break;
    case 'm':
        modificarRegistro();
        break;
    case 'e':
        eliminarRegistro();
        break;
    case 'l':   
        listarRegistro();
        break;
    case 'c':
        consultarRegistro();
    break;              
}

function guardarRegistro(){
    $connection = new PDODB();
    $connection->connect();
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $genero = $_POST['genero'];
    $documento = $_POST['documento'];
    $fechaNC = $_POST['fechaNC'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $sql = "INSERT INTO registro_usuarios(codUsuario,Nombres,Apellidos,Genero,numero_documento,FechadeNacimiento,CorreoElectronico, Contrasena) VALUES (null,'".$nombres."', '".$apellidos."', '".$genero."', '".$documento."', '".$fechaNC."', '".$correo."', '".$contrasena."' )";
    $guardado = $connection->executeInstruction($sql);
    if ($guardado){
        echo "Guardado Correctamente";
    }
    else {
        echo "No fue guardado correctamente";
    }
}

function listarRegistro(){
    $connection = new PDODB();
    $connection->connect();
    $sql = "SELECT * FROM registro_usuarios";
    $lista = $connection->getData($sql);
    foreach ($lista as $key) {
        echo'<tr>
            <th class="pt-3-half" contenteditable=="false"> '.$key['codUsuario'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['Nombres'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['Apellidos'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['Genero'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['numero_documento'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['FechadeNacimiento'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['CorreoElectronico'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['Contrasena'].'</th>
            <th>
            <span class= "table-remove"><button onclick="consultarRegistro('.$key['codUsuario'].') type="button" class="btn btn-warning btn-rounded btn-sm my-0">Cargar</button></span>
            </th>

            <th><span class= "table-remove"><button onclick="eliminarRegistro('.$key['codUsuario'].') type="button" class="btn btn-danger btn-rounded btn-sm my-0">Eliminar</button></span>
            </th>
        </tr>';
    }
     
}

 function eliminarRegistro(){
     $connection = new PDODB();
     $connection->connect();
     $codUsuario = $_POST['codUsuario'];
     $sql = "DELETE FROM registro_usuarios WHERE codUsuario =".$codUsuario;
     $eliminado = $connection->executeInstruction($sql);
}

function consultarRegistro(){
    $connection = new PDODB();
    $connection->connect();
    $codUsuario = $_POST['codUsuario'];
    $sql = "SELECT * FROM registro_usuarios WHERE codUsuario =".$codUsuario."";
    $lista = $connection->getData($sql);
    $formHtml ="";
    foreach ($lista as $key) {
        $formHtml .="<input type='hidden' class='inputModal' value=".$key['codUsuario']." name='codUsuario' id='codUsuario' disable='disable'>   
        <div class='row'>
            <div class='col'>
               <label>Nombres</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
               <input type='text' class='inputModal' value=".$key['Nombres']." name='NombresM' id='NombresM'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>Apellidos</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='text' class='inputModal' value=".$key['Apellidos']." name='ApellidosM' id='ApellidosM'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>Genero</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='text' class='inputModal' value=".$key['Genero']." name='GeneroM' id='GeneroM'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>N° documento</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='number' class='inputModal' value=".$key['Documento']." name='DocumentoM' id='DocumentoM'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>Fecha de nacimiento</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='date' class='inputModal' value=".$key['FechaNC']." name='FechaNCM' id='FechaNCM'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>Correo electrónico</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='email' class='inputModal' value=".$key['Correo']." name='CorreoM' id='CorreoM'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>Contraseña</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='password' class='inputModal' value=".$key['Contrasena']." name='ContrasenaM' id='ContrasenaM'>
            </div>
        </div>";
    }
    echo $formHtml;
}

function modificarRegistro(){
    $connection = new PDODB();
    $connection->connect();
    $codUsuario = $_POST['codUsuario'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $genero = $_POST['genero'];
    $documento = $_POST['documento'];
    $fechaNC = $_POST['fechadeNC'];
    $correo = $_POST['correo'];
    $sql = "UPDATE registro_usuarios SET Nombres='".$nombres"', Apellidos='".$apellidos"', Genero='".$genero"', numero_documento='".$documento"', FechadeNacimiento='".$fechaNC"', CorreoElectonico='".$correo"' WHERE codUsuario='".$codUsuario"'";
    
    $modificado = $connection->executeInstruction($sql);
    if($modificado){
        echo "Modificado correctamente.";
    }else{
        echo "No se pudo modificar.";
    }
 }
 
?>