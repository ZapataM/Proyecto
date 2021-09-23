<div class="card card-primary">
      <div class="card-header">
         <h3 class="card-title" data-card-widget="collapse">
         Resultados Encuesta Depresión
         </h3>
      </div>
  
      <div class="card-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>codUsuarios</th>
            <th>tristeza</th>
            <th>llorar</th>
            <th>dormir_mal</th>
            <th>nerviosismo</th>
            <th>pesimismo</th>
            <th>inseguridad</th>
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
        listarDepresion();
    });
    function eliminarDepresion(codU) {
      $.ajax ({
        data: {
          "codUsuario" : codU,
          "metodo" : "e"
        },
        url: '../../controlador/ctrolEncuestaDepresion.php',
        type: 'post',
        success: function (response) {
          alert(response);
          listarDepresion();
        }
      });
    }
  </script>

