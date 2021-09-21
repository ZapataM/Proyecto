<?php

require_once '../modelo/conexion.php';

$metodo = $_POST['metodo'];

switch ($metodo){ 
    case 'g':
        guardarFormulario();
        break;
    case 'm':
        modificarFormulario();
        break;
    case 'e':
        eliminarFormulario();
        break;
    case 'l':   
        listarFormulario();
        break;
    case 'c':
        consultarFormulario();
    break;              
}

function guardarFormulario(){
    $connection = new PDODB();
    $connection->connect();
    $N_formulario = $_POST['N_formulario'];
    $Nom_formulario = $_POST['Nom_formulario'];
    $Descripcion = $_POST['Descripcion'];
    $sql = "INSERT INTO formularios(codFormulario,N_formulario,Nom_formulario,Descripcion) VALUES (null,'".$N_formulario."', '".$Nom_formulario."', '".$Descripcion."')";
    $guardado = $connection->executeInstruction($sql);
    if ($guardado){
        echo "Guardado Correctamente";
    }
    else {
        echo "No fue guardado correctamente";
    }
}

function modificarFormulario(){
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

function listarFormulario(){
    $connection = new PDODB();
    $connection->connect();
    $sql = "SELECT * FROM formularios";
    $lista = $connection->getData($sql);

    foreach ($lista as $key) {
        echo'<tr>
            <th class="pt-3-half" contenteditable=="false"> '.$key['codFormulario'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['N_formulario'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['Nom_formulario'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['Descripcion'].'</th>
        
            <span class= "table-remove"><button onclick="consultarComunicacion('.$key['codFormulario'].') type="button" class="btn btn-warning btn-rounded btn-sm my-0">Cargar</button></span>
            </th>

            <th><span class= "table-remove"><button onclick="eliminarRegistro('.$key['codFormulario'].') type="button" class="btn btn-danger btn-rounded btn-sm my-0">Eliminar</button></span>
            </th>
        </tr>';
    }
     
}

//  function eliminarFormulario(){
//      $connection = new PDODB();
//      $connection->connect();
//      $codUsuario = $_POST['codUsuario'];
//      $sql = "DELETE FROM registro_usuarios WHERE codUsuario =".$codUsuario;
//      $eliminado = $connection->executeInstruction($sql);
// }

// function consultarComunicacion(){
//     $connection = new PDODB();
//     $connection->connect();
//     $codUsuario = $_POST['codUsuario'];
//     $sql = "SELECT * FROM registro_usuarios WHERE codUsuario =".$codUsuario."";
//     $lista = $connection->getData($sql);
//     $formHtml ="";
//     foreach ($lista as $key) {
//         $formHtml .="<input type='hidden' class='inputModal' value=".$key['codUsuario']." name='codUsuario' id='codUsuario' disable='disable'>   
//         <div class='row'>
//             <div class='col'>
//                <label>Nombres</label>
//             </div>
//         </div>
//         <div class='row'>
//             <div class='col'>
//                <input type='text' class='inputModal' value=".$key['Nombres']." name='Nombres' id='Nombres'>
//             </div>
//         </div>

//         <div class='row'>
//             <div class='col'>
//                <label>Apellidos</label>
//             </div>
//         </div>
//         <div class='row'>
//             <div class='col'>
//                 <input type='text' class='inputModal' value=".$key['Apellidos']." name='Apellidos' id='Apellidos'>
//             </div>
//         </div>

//         <div class='row'>
//             <div class='col'>
//                <label>Genero</label>
//             </div>
//         </div>
//         <div class='row'>
//             <div class='col'>
//                 <input type='text' class='inputModal' value=".$key['Genero']." name='Genero' id='Genero'>
//             </div>
//         </div>

//         <div class='row'>
//             <div class='col'>
//                <label>N° documento</label>
//             </div>
//         </div>
//         <div class='row'>
//             <div class='col'>
//                 <input type='number' class='inputModal' value=".$key['Documento']." name='Documento' id='Documento'>
//             </div>
//         </div>

//         <div class='row'>
//             <div class='col'>
//                <label>Fecha de nacimiento</label>
//             </div>
//         </div>
//         <div class='row'>
//             <div class='col'>
//                 <input type='date' class='inputModal' value=".$key['FechaNC']." name='FechaNC' id='FechaNC'>
//             </div>
//         </div>

//         <div class='row'>
//             <div class='col'>
//                <label>Correo electrónico</label>
//             </div>
//         </div>
//         <div class='row'>
//             <div class='col'>
//                 <input type='email' class='inputModal' value=".$key['Correo']." name='Correo' id='Correo'>
//             </div>
//         </div>";
//     }
//     echo $formHtml;
// }

?>