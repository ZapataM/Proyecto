<!--CONTENIDO HIJO-->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Registro de Usuarios</h3>
    </div>
      <!-- /.card-header -->
  <div class="row">
    <div class="col">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>CodUsuario</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Genero</th>
            <th>numero_documento</th>
            <th>FechaDeNacimiento</th>
            <th>CorreoElectronico</th>
            <th>Contraseña</th>
            <th>Cargar</th>
            <th>Eliminar</th>
          </tr>


        </thead>
        <tfoot>
        </tfoot>
        <tbody>
          
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
    $( document ).ready(function() {
        listarRegistro();
    });
</script>
<div class="modal fade" id="modalModificarRegistros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="modificarEmocional($('#codUsuario').val())" >Guardar cambios.</button>
      </div>
    </div>
  </div>
</div>