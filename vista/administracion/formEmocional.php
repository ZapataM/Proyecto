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
                           <input class="btn btn-info"  type="button" value="Enviar" onclick="guardarEmocional()">
                           <input class="btn btn-info" style="position: absolute;right: 87%;" type="button" value="Volver" onclick="cargar('FormUsuarios.php')">
                        </div>
                     </div>
                  </div>
               </div>
      </form>
   </div>


