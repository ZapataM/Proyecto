<!--CONTENIDO HIJO-->
<div class="card card-primary">
   <div class="card-header">
      <h3 class="card-title">Lista de Formularios</h3>
   </div>
   <!-- /.card-header -->
   <!-- form start -->
   <!--FORMULARIO INICIAL DE FORMULARIOS-->
   <form id="quickForm5">
      <div class="card-body">
         <div class="row">
         <div class="col">
               <div class="form-group">
                  <label for="exampleInputEmail1">N°Formulario</label>
                  <input type="text" name="nForm" id="nForm" class="form-control"  placeholder="Nombre del Formulario">
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <label for="exampleInputEmail1"> Ingresar un nuevo Formulario</label>
                  <input type="text" name="nomForm" id="nomForm" class="form-control"  placeholder="Nombre del Formulario">
               </div>
            </div>
            <div class="col">
               <div class="form-group">
                  <label for="exampleInputPassword1">Descripción</label>
                  <input type="text" name="descForm" id="descForm" class="form-control" placeholder="Descripción del Formulario">
               </div>
            </div>
         </div>
         
         <div class="row">
            <div class="col">
               <div class="card-group">
                 <input class="btn btn-info" type="button" value="Añadir Formulario" onclick="guardarFormulario()">
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col">
               <table id="Tregistrar" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>N_formulario</th>
                        <th>Nom_formulario</th>
                        <th>Descripcion</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                     </tr>
                  </thead>   
               </table>
               <tbody>

               </tbody>
            </div>
         </div>
         <script>
            $( document ).ready(function() {
            listarFormulario();
            });
         </script>
      </div>
   </form>
</div>

   <!--FORMULARIO ANGÉLICA-->
   <div class="card card-primary">
      <div class="card-header">
         <h3 class="card-title" data-card-widget="collapse">
         Formulario de Encuesta emocional
         </h3>
      </div>
      <form id="formularioUsuarios" method="post">
         <div class="card-body">
            <div class="row">
               <div class="col">
                  <div class="form-group">
                     <label for="exampleInputEmail1">¿Cómo describirías tu estado de ánimo últimamente?</label>
                     <input type="text" class="form-control" id="encuesta1"  placeholder="Estado emocional" required>
                  </div>
               </div>

                     <div class="col">
                        <div class="form-group">
                           <label for="exampleInputEmail1">¿Te preocupas por demasiadas cosas sin importancia?</label>
                           <input type="text" class="form-control" id="encuesta2"  placeholder="Cosas sin mportancia" required>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="form-group">
                           <label for="exampleInputEmail1">¿Tienes problemas para tomar decisiones?</label>
                           <input type="text" class="form-control" id="encuesta3"  placeholder="Toma de decisiones" required>
                        </div>
                     </div>
                     <div class="col">
                        <div class="form-group">
                           <label for="exampleInputEmail1">¿Sueles tener falta de concentración?</label>
                           <input type="text" class="form-control" id="encuesta4"  placeholder="Falta de concentración" required>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="form-group">
                           <label for="txtFNacimiento">¿Te cuesta expresar tus emociones y tu sentir?</label>
                           <input type="text" class="form-control" id="encuesta5"  placeholder="Expresar emociones y su sentir" required>
                        </div>
                     </div>
                     <div class="col">
                        <div class="form-group">
                           <label for="txtFNacimiento">¿Te sientes satisfecho con quién eres?</label>
                           <input type="text" class="form-control" id="encuesta6"  placeholder="Satisfacción personal" required>
                        </div>
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
                           <input class="btn btn-secondary" type="button" value="¡Hecho!" onclick="guardarEmocional()">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </form>
   </div>

   <!--FORMULARIO DEPRESION-->
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
                     <input class="btn btn-secondary" type="button" value="¡Hecho!" onclick="guardarDepresion()">
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>




