<?php

require_once '../modelo/conexion.php';


$metodo = $_POST['metodo'];

switch ($metodo) {
        case 'g':
            guardarEmocional();
            break;
        case 'm':
            modificarEmocional();
            break;
        case 'e':
            eliminar();
            break;
        case 'l':   
            listarEmocional();
            break;
        case 'c':
            consultarEmocional();
        break;
}

function guardarEmocional() {
    $connection = new PDODB();
    $connection->connect();
    $estado_animo = $_POST['estado_animo'];
    $preocupaciones = $_POST['preocupaciones'];
    $toma_decisiones = $_POST['toma_decisiones'];
    $concentracion = $_POST['concentracion'];
    $emocionesysentir = $_POST['emocionesysentir'];
    $satisfaccion_ser = $_POST['satisfaccion_ser'];
    $sql = "INSERT INTO encuesta_emocional(codUsuario,estado_animo,preocupaciones,toma_decisiones,concentracion,emocionesysentir,satisfaccion_ser) VALUES (null,'".$estado_animo."', '".$preocupaciones."', '".$toma_decisiones."', '".$concentracion."', '".$emocionesysentir."', '".$satisfaccion_ser."' )";
    $guardado = $connection->executeInstruction($sql);
    if ($guardado){
        echo "Guardado Correctamente";
    }
    else {
        echo "No fue guardado correctamente";
    }
}

function modificarEmocional(){
   $connection = new PDODB();
   $connection->connect();
   $estado_animo = $_POST['estado_animo'];
   $preocupaciones = $_POST['preocupaciones'];
   $toma_decisiones = $_POST['toma_decisiones'];
   $concentracion = $_POST['concentracion'];
   $emocionesysentir = $_POST['emocionesysentir'];
   $satisfaccion_ser = $_POST['satisfaccion_ser'];
   $sql = "UPDATE encuesta_emocional SET estado_animo='".$estado_animo"', preocupaciones='".$preocupaciones"', toma_decisiones='".$toma_decisiones"', concentracion='".$concentracion"', emocionesysentir='".$emocionesysentir"', satisfaccion_ser='".$satisfaccion_ser"' WHERE codUsuario='".$codUsuario"'";
  
                                    $modificado = $connection->executeInstruction($sql);
                                    if($modificado){
                                        echo "Modificado correctamente.";
                                    }else{
                                        echo "No se pudo modificar.";
                                    }
}

function listarEmocional(){
    $connection = new PDODB();
    $connection->connect();
    $sql = "SELECT * FROM encuesta_emocional";
    $lista = $connection->getData($sql);
    $tablaHtml = '';

    foreach ($lista as $key) {
        echo'<tr>
            <th class="pt-3-half" contenteditable=="false"> '.$key['codUsuario'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['estado_animo'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['preocupaciones'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['toma_decisiones'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['concentracion'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['emocionesysentir'].'</th>
            <th class="pt-3-half" contenteditable=="false"> '.$key['satisfaccion_ser'].'</th>
            <th>
            <span class= "table-remove"><button onclick="consultarEmocional('.$key['codUsuario'].') type="button" class="btn btn-warning btn-rounded btn-sm my-0">Cargar</button></span>
            </th>

            <th><span class= "table-remove"><button onclick="eliminarEmocional('.$key['codUsuario'].') type="button" class="btn btn-danger btn-rounded btn-sm my-0">Eliminar</button></span>
            </th>
        </tr>';
    }
     
}

function consultarEmocional(){
    $connection = new PDODB();
    $connection->connect();
    $codComunicacion = $_POST['codUsuario'];
    $sql = "SELECT * FROM encuesta_emocional WHERE codUsuario =".$codUsuario;
    $lista = $connection->getData($sql);
    $formHtml="";
    foreach ($lista as $key) {
        $formHtml.="<input type='hidden' class='inputModal' value=".$key['codUsuario']."
        name='codUsuarioM' id='codUsuarioM' disable='disable'>   
        <div class='row'>
            <div class='col'>
               <label>Estado de ánimo</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
               <input type='text' class='inputModal' value=".$key['estado_animo']."
                    name='estado_animoM' id='estado_animoM'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>Preocupaciones</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='text' class='inputModal' value=".$key['preocupaciones']."
                    name='preocupacionesM' id='preocupacionesM'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>Toma de decisiones</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='text' class='inputModal' value=".$key['toma_decisiones']."
                    name='toma_decisionesM' id='toma_decisionesM'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>Concentración</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='text' class='inputModal' value=".$key['concentracion']."
                    name='concentracionM' id='concentracionM'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>Emociones y Sentir</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='text' class='inputModal' value=".$key['emocionesysentir']."
                    name='emocionesysentirM' id='emocionesysentirM'>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
               <label>Satisfacción</label>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <input type='text' class='inputModal' value=".$key['satisfaccion_ser']."
                    name='satisfaccion_serM' id='satisfaccion_serM'>
            </div>
        </div>";
    }
    echo $formHtml;
}

?>