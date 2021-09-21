<!doctype html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="WhitUs - Registrarse">
      <meta name="generator" content="Jekyll v4.1.1">
      <link rel="icon" type="image/png" href="../dashboard/imagenes/icono.png">
      <title>WhitUs · Sign-in</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
      <link rel="stylesheet" href="../dashboard/css/redes.css">
      <link href="../dashboard/css/signin.css" rel="stylesheet">
      <link href="../dashboard/css/bootstrap.min.css" rel="stylesheet">
      <link href="../dashboard/css/secciones.css" rel="stylesheet">
      <link href="../dashboard/css/estilos.css" rel="stylesheet">
      <!-- Bootstrap core CSS -->
      <style>
         .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         }
         @media (min-width: 768px) {
         .bd-placeholder-img-lg {
         font-size: 3.5rem;
         }
         }
      </style>
      <div class="red">
         <div id="facebook">
            <a href="#" target="none" class="fa fa-facebook"></a>
         </div>
         <div id="youtube">
            <a href="#" class="fa fa-youtube-play"></a>
         </div>
         <div id="twitter">
            <a href="#" class="fa fa-twitter"></a>
         </div>
         <div id="correo">
            <a href="#" class="fa fa-envelope"></a>
         </div>
      </div>
   </head>
    <body class="text-center">
        <form class="form-signin">
          <img class="mb-4" src="../dashboard/imagenes/logo2.png" alt="" width="140" height="140">
          <h3 class="h3 mb-3 font-weight-normal">Por favor, regístrese.</h3>
          <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Nombres" required>
          <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Apellidos" required>
          <select name="genero" id="genero" class="form-control" placeholder="Género" required>
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
          </select>
          <input type="number" id="documento" name="documento" class="form-control" placeholder="N° Documento" required>
          <input type="date" id=fechaNC" name="fechaNC" class="form-control" placeholder="Fecha de Nacimiento" required>
          <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo Electronico" required>
          <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Contraseña" required>
          <label>
          <input type="checkbox" value="remember-me"> Recúerdame </label>
          </div>
          <input class="btn btn-lg btn-primary btn-block" type="button" value="Comenzar" onclick="guardarRegistro()">
          <br>
          <p>
            <a class="btn btn-lg btn-primary" href="sign-in.php">Volver</a>
          </p>
          <p>&copy; 2020 WhitUs Inc. &middot; <br>
              <a href="#">Términos &middot;</a>
              <a href="#"> Condiciones
          </p>
        </form>
    </body>
  </div>
</html>