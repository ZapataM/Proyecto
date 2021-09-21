function cargar(urlMenu) {
  $.ajax({
    type: "POST",
    url: urlMenu,
    data: {},
    success: function (datos) {
      $("#qCarga").html(datos);
    },
  });
}


// BASE DE DATOS REGISTRO
function guardarRegistro() {
  $.ajax ({
    url: "../../controlador/ctrolRegistro.php",
    type: "POST",
    data: {
      'nombres': $("#nombres").val(),
      'apellidos': $("#apellidos").val(),
      'genero': $("#genero").val(),
      'documento': $("#documento").val(),
      'fechaNC': $("#fechaNC").val(),
      'correo': $("#correo").val(),
      'contrasena': $("#contrasena").val(),
      "metodo" : "g"
    },
    success: function (response) {
      alert(response);
    },
  });
}

function eliminarRegistro(codU) {
  $.ajax ({
    data: {
      "codUsuario" : codU,
      "metodo" : "e"
    },
    url: '../../controlador/ctrolRegistro.php',
    type: 'post',
    success: function (response) {
      alert(response);
    }
  });
}

function consultarRegistro(codC) {
  $("#modalModificarRegistros").modal("show");
  $.ajax({
    data: {
      "codUsuario" : codC,
      "metodo" : "c"
    },
    url: '../../controlador/ctrolRegistro.php',
    type: 'POST'
  
  });

}

function listarRegistro() {
  $.ajax({
    data: {
      "metodo" : "l"
    },
    type: 'POST',
    url: '../../controlador/ctrolRegistro.php',
    dataType: 'html',
    success: function (data){
      $('tbody').text("");
      $('tbody').append(data);

    }
  });    
}

function modificarRegistro(){
  $.ajax({
    data: {
      "codUsuario" : $('#codUsuario').val(),
      "estadNombreso_animo" : $('#NombresM').val(),
      "Apellidos" : $('#ApellidosM').val(),
      "Genero" : $('#GeneroM').val(),
      "Documento" : $('#DocumentoM').val(),
      "FechaNC" : $('#FechaNCM').val(),
      "Correo" : $('#CorreoM').val(),
      "Contrasena" : $('#ContrasenaM').val(),
      
      "metodo" : "m"
    },
    url: '../../controlador/ctroRegistro.php',
    type: 'post',
    success: function (data) {
      alert(data);
      $('#modalModificarRegistros').modal("hide");
      listarRegistro();
    }
  });
}

// BASE DE DATOS ENCUESTA EMOCIONAL
function guardarEmocional() {
  $.ajax({
    url: "../../controlador/ctrolEncuestaEmocional.php",
    type: "POST",
    data: {
      'estado_animo': $("#encuesta1").val(),
      'preocupaciones': $("#encuesta2").val(),
      'toma_decisiones': $("#encuesta3").val(),
      'concentracion': $("#encuesta4").val(),
      'emocionesysentir': $("#encuesta5").val(),
      'satisfaccion_ser': $("#encuesta6").val(),
      "metodo": "g"
    },
    success: function (response) {
      alert(response);
    },
  });
}

// function eliminarEmocional(codU) {
//   $.ajax ({
//     data: {
//       "codUsuario" : codU,
//       "metodo" : "e"
//     },
//     url: '../../controlador/ctrolEncuestaEmocional.php',
//     type: 'post',
//     success: function (response) {
//       alert(response);
//       actualizarTablaEmocional();
//     }
//   });
// }

function consultarEmocional(codUsuario) {
  $("#modalModificar").modal("show");
  $.ajax({
    type: "POST",
    url: '../../controlador/ctrolEncuestaEmocional.php',
    data: {
      "codUsuario" : codUsuario,
      "metodo" : "c"
    },
    success: function (data) {
      jQuery('.modal-body').text("");
      jQuery('.modal-body').append(data);
    }
  });
}

function modificarEmocional(){
  $.ajax({
    data: {
      "codUsuario" : $('#codUsuarioM').val(),
      "estado_animo" : $('#estado_animoM').val(),
      "preocupaciones" : $('#preocupacionesM').val(),
      "toma_decisiones" : $('#toma_decisionesM').val(),
      "concentracion" : $('#concentracionM').val(),
      "emocionesysentir" : $('#emocionesysentirM').val(),
      "satisfaccion_ser" : $('#satisfaccion_serM').val(),
      "metodo" : "m"
    },
    url: '../../controlador/ctrolEncuestaEmocional.php',
    type: 'post',
    success: function (data) {
      alert(data);
      $('#modalModificar').modal("hide");
      listarEmocional();
    }
  });
}

function listarEmocional() {
  $.ajax({
    data: {
      "metodo" : "l"
    },
    type: 'POST',
    url: '../../controlador/ctrolEncuestaEmocional.php',
    dataType: 'html',
    success: function (data){
      $('tbody').text("");
      $('tbody').append(data);
    }
  });  
}

// BASE DE DATOS ENCUESTA DEPRESION
function guardarDepresion() {
  $.ajax({
    url: "../../controlador/ctrolEncuestaDepresion.php",
    type: "POST",
    data: {
      'tristeza': $("#depre1").val(),
      'llorar': $("#depre2").val(),
      'dormir_mal': $("#depre3").val(),
      'nerviosismo': $("#depre4").val(),
      'pesimismo': $("#depre5").val(),
      'inseguridad': $("#depre6").val(),
      'metodo': "g",
    },
    success: function (response) {
      alert(response);
      listarDepresion();
    },
  });
}

function eliminarDepresion(codC) {
  $.ajax ({
    data: {
      "codComunicacion" : codC,
      "metodo" : "e"
    },
    url: '../../controller/ctrolComunicaciones.php',
    type: 'post',
    success: function (response) {
      alert(response);
      actualizarTablaComunicaciones();
    }
  });
}

function consultarDepresion(codC) {
  $.ajax({
    data: {
      "codComunicacion" : codC,
      "metodo" : "c"
    },
    url: '../../controller/ctrolComunicaciones.php',
    type: 'post',
    success: function (response) {
      $("#bodyUsuarioModificar").text("");
      $("#bodyUsuarioModificar").append(response);
    }
  });
  $("#modificarModal").modal("show");
}

function listarDepresion() {
  $.ajax({
    data: {
      "metodo" : "l"
    },
    type: 'POST',
    url: '../../controlador/ctrolEncuestaDepresion.php',
    dataType: 'html',
    success: function (data){
      $('tbody').text("");
      $('tbody').append(data);
    }
  });  
}


// BASE DE DATOS FORMULARIOS
function guardarFormulario() {
  $.ajax({
    url: "../../controlador/ctrolFormularios.php",
    type: "POST",
    data: {
      'N_formulario': $("#nForm").val(),
      'Nom_formulario': $("#nomForm").val(),
      'Descripcion': $("#descForm").val(),
      'metodo': "g"
    },
    success: function (response) {
      alert(response);
    },
  });
}

function eliminarFormulario(codC) {
  $.ajax ({
    data: {
      "codComunicacion" : codC,
      "metodo" : "e"
    },
    url: '../../controller/ctrolComunicaciones.php',
    type: 'post',
    success: function (response) {
      alert(response);
    }
  });
}

function modificarFormulario(codC) {
  $.ajax({
    data: {
      "codComunicacion" : codC,
      "metodo" : "c"
    },
    url: '../../controller/ctrolComunicaciones.php',
    type: 'post',
    success: function (response) {
      $("#bodyUsuarioModificar").text("");
      $("#bodyUsuarioModificar").append(response);
    }
  });
  $("#modificarModal").modal("show");
}

function listarFormulario() {
  $.ajax({
    data: {
      "metodo" : "l"
    },
    type: 'POST',
    url: '../../controlador/ctrolFormularios.php',
    dataType: 'html',
    success: function (data){
      $('tbody').text("");
      $('tbody').append(data);
    }
  });  
}

//BASE DE DATOS PERFIL

function guardarPerfil() {
  $.ajax({
    url: "../../controlador/ctrolPerfil.php",
    type: "POST",
    data: {
      'nombApell': $("#nombApell").val(),
      'ocupacion': $("#ocupacion").val(),
      'genero2': $("#genero2").val(),
      'ciudad': $("#ciudad").val(),
      'escuela': $("#escuela").val(),
      'metodo': "g"
    },
    success: function (response) {
      alert(response);
    },
  });
}

function listarPerfil() {
  $.ajax({
    data: {
      "metodo" : "l"
    },
    type: 'POST',
    url: '../../controlador/ctrolPerfil.php',
    dataType: 'html',
    success: function (data){
      $('tbody').text("");
      $('tbody').append(data);
    }
  });  
}


