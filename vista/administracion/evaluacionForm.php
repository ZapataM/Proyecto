<ul class="nav nav-tabs" id="myTab" role="tablist">
   <li class="nav-item">
      <a class="nav-link active" id="fpe-tab" data-toggle="tab" href="#fpe" role="tab" aria-controls="home" aria-selected="true">Formularios Por Evaluar</a><br>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="fd-tab" data-toggle="tab" href="#fd" role="tab" aria-controls="profile" aria-selected="false">Agregar Formularios</a>
   </li>
</ul>

<div class="tab-content" id="myTabContent">
   <div class="tab-pane fade show active" id="fpe" role="tabpanel" aria-labelledby="fpe-tab">
      <!--CONTENIDO HIJO-->
      <div class="card card-primary">
         <div class="card-header">Formularios por evaluar</h3>
         </div>
         <!-- /.card-header -->
         <!-- form start -->
         <div class="card-body">
            <div class="row">
               <div class="col">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>N° Formulario</th>
                           <th>Nombre Formulario</th>
                           <th>Descripción</th>
                           <th>CodUsuario</th>
                           <th>Preguntas</th>
                           <th>Eliminar</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>Encuesta Emocional</td>
                           <td>Serie de preguntas básicas acerca del estado emocional del usuario.</td>
                           <td></td>
                           <td><input type="button" value="Evaluar" class="btn btn-info"  onclick="cargar('formEmocioEval.php')"></td>
                           <td><input type="button" value="Eliminar" class="btn btn-danger"></td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>Formulario Depresión</td>
                           <td>Serie de preguntas específicas para identificar presencia de trastorno depresivo en el usuario.</td>
                           <td></td>
                           <td><input type="button" value="Evaluar" class="btn btn-info" onclick="cargar('formDepreEval.php')"></td>
                           <td><input type="button" value="Eliminar" class="btn btn-danger"></td>
                        </tr>
                        </tfoot>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!--CONTENIDO HIJO TERMINA-->
   </div>

   <div class="tab-pane fade" id="fd" role="tabpanel" aria-labelledby="fd-tab">
       <!--CONTENIDO HIJO-->
      <div class="card card-primary">
         <div class="card-header">Agregar un Formulario</h3>
         </div>

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
            </div>
         </form>  
      <!--CONTENIDO HIJO TERMINA-->
   </div>

</div>