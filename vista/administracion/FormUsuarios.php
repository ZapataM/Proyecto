<div class="card card-primary">
   <div class="card-header">
      <h3 class="card-title">Formularios Disponibles</h3>
   </div>
   <!-- /.card-header -->
   <!-- form start -->
   <!--FORMULARIO INICIAL DE FORMULARIOS-->
   
      <div class="card-body">
         <div class="row">
            <div class="col">
               <table id="Tregistrar" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>N° Formulario</th>
                        <th>Nombre Formulario</th>
                        <th>Descripción</th>
                        <th>Comenzar</th>
                        
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>1</td>
                        <td>Encuesta Emocional</td>
                        <td>Serie de preguntas básicas acerca del estado emocional del usuario.</td>
                        <td><input id="btnModificar" type="button" value="Comenzar" onclick="cargar('formEmocional.php')" class="btn btn-primary"></td>
                        
                     </tr>
                     <tr>
                        <td>2</td>
                        <td>Formulario Depresión</td>
                        <td>Serie de preguntas específicas para identificar presencia de trastorno depresivo en el usuario.</td>
                        <td><input id="btnModificar" type="button" value="Comenzar" onclick="cargar('formDepresion.php')" class="btn btn-primary"></td>
                     </tr>
               </table>
            </div>
         </div>
      </div>
   </form>

   <div class="content-wrapper">
    <section class="content"><br>
          <div class="container-fluid">
              <!--AQUI VA LO QUE SE VE (HIJO)-->
              <div id="qCarga">
              
              </div>
              <!--AQUI TERMINA LO QUE SE VE (HIJO)-->
          </div>
    </section>
  </div>

</div>
<!--CONTENIDO HIJO TERMINA-->