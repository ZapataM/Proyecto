<div class="card card-primary">
      <div class="card-header">
         <h3 class="card-title" data-card-widget="collapse">
         Forrmulario de Depresión 
         </h3>
      </div>
      <form id="quickForm5">
         <div class="card-body">
            <div class="row">
               <div class="col">
                  <div class="form-group">
                     <label for="exampleInput">¿Se siente triste o afligido?</label>
                     <input type="text" id="depre1" class="form-control">
                  </div>
               </div>
               <div class="col">
                  <div class="form-group">
                     <label for="exampleInput">¿Llora o tiene ganas de llorar?</label>
                     <input type="text" id="depre2" class="form-control">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="form-group">
                     <label for="exampleInput">¿Duerme mal de noche?</label>
                     <input type="text" id="depre3" class="form-control">
                  </div>
               </div>
               <div class="col">
                  <div class="form-group">
                     <label for="exampleInput">¿Se siente nervioso, angustiado o ansioso?</label>
                     <input type="text" id="depre4" class="form-control">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="exampleInput">¿Se siente pesimista, piensa que las cosas le van a salir mal?</label>
                     <input type="text" id="depre5" class="form-control">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="exampleInput">¿Se siente inseguro, con falta de confianza en usted mismo?</label>
                     <input type="email" id="depre6" class="form-control">
                  </div>
               </div>

               <div class="col">
                  <div class="form-group" style="margin-top:15px;"></div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="form-group">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" alue="true" class="custom-control-input" id="terminos">
                           <input id='terminosHidden' type='hidden' value='false'>
                              <label class="custom-control-label" for="terminos">Acepto los <a href="term_cond.php">Terminos y Condiciones</a></label>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="card-group">
                     <input class="btn btn-info"  type="button" value="Enviar" onclick="guardarDepresion()">
                     <input class="btn btn-info" style="position: absolute;right: 83%;" type="button" value="Volver" onclick="cargar('FormUsuarios.php')">
                  </div>
               </div>
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

         </div>
      </form>
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

