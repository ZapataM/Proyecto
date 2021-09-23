<div class="card card-primary">
      <div class="card-header">
         <h3 class="card-title" data-card-widget="collapse">
         Resultados Encuesta emocional
         </h3>
      </div>
      

   <div class="card-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>CodUsuario</th>
            <th>Estado de ánimo</th>
            <th>Preocupaciones</th>
            <th>Toma de decisiones</th>
            <th>Concentración</th>
            <th>Emociones y Sentir</th>
            <th>Satisfacción</th>
            <th>Modificar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tfoot>
        </tfoot>
        <tbody>
          
        </tbody>
      </table>
   </div>

   <div class="row">
        <div class="col">
            <div class="col-sm-7">
                <input class="btn btn-secondary" type="button" value="Volver" onclick="cargar('evaluacionForm.php')">
            </div>
        </div>
    </div>
    <br>
</div>

  <script>
    $( document ).ready(function() {
        listarEmocional();
    });
    function eliminarEmocional(codU) {
   $.ajax ({
     data: {
       "codUsuario" : codU,
       "metodo" : "e"
     },
     url: '../../controlador/ctrolEncuestaEmocional.php',
     type: 'post',
     success: function (response) {
       alert(response);
       listarEmocional();
       }
      });
    }
  </script>


<!-- Modal -->
<div class="modal fade" id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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