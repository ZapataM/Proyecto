<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Editar Perfil</h3>
  </div>
 
  <form>
    <div class="row">
     <div class="col-md-5">
        <div class="card-tools">
            <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../dashboard/imagenes/galeria2/maira.jpg"
                       alt="User profile picture">
                </div>

                


                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item text-muted text-center" id="Descrip1">
                     
                  </li>
                  <li class="list-group-item text-muted text-center" id="Descrip1">
                     
                  </li>
                  <li class="list-group-item text-muted text-center" id="Descrip2">
                     
                  </li>
                  <li class="list-group-item text-muted text-center" id="Descrip3">
                     
                  </li>
                  <li class="list-group-item text-muted text-center" id="Descrip4">
                      
                  </li>
                </ul>

                
            </div>
            <!-- /.card-body -->
        </div>
    </div>

    

    <div class="card-body" id="settings">
        <div class="offset-sm-2">
                    
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Nombre y Apellidos</label>
                        <div class="col-sm-7">
                          <input type="text" name="nombApell" id="nombApell" class="form-control"  placeholder="Registre su nombre y apellidos">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Ocupación</label>
                        <div class="col-sm-7">
                          <input type="text" name="ocupacion" id="ocupacion" class="form-control"  placeholder="Registre su ocupación">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-3 col-form-label">Genero</label>
                        <div class="col-sm-7">
                           <input type="text" name="genero2" id="genero2" class="form-control"  placeholder="Registre su genero">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Ciudad</label>
                        <div class="col-sm-7">
                          <input type="text" name="ciudad" id="ciudad" class="form-control"  placeholder="Registre su ciudad actual">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Escuela</label>
                        <div class="col-sm-7">
                          <input type="text" name="escuela" id="escuela" class="form-control"  placeholder="Registre su escuela">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="offset-sm-3 col-sm-10">
                           <input class="btn btn-primary" type="button" value="Guardar" onclick="guardarPerfil()">
                        </div>
                      </div>
    </div>
  </form>
</div>
<!--CONTENIDO HIJO TERMINA-->

<script>
    $( document ).ready(function() {
        listarPerfil();
    });
</script>



