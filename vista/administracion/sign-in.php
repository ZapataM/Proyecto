<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="WhitUs - Iniciar sesión">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="icon" type="image/png" href="../dashboard/imagenes/icono.png">
    <title>WhitUs · Sign-in</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <link rel="stylesheet" href="../dashboard/css/redes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/502b7294a9.js"></script>
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
        <div id="facebook"><a href="#" target="none" class="fa fa-facebook"></a></div>
        <div id="youtube"><a href="#" class="fa fa-youtube-play"></a></div>
        <div id="twitter"><a href="#" class="fa fa-twitter"></a></div>
        <div id="correo"><a href="#" class="fa fa-envelope"></a></div>
      </div>
  </head>  
  
  <body class="text-center">
    <form class="form-signin" id="iniciarForm" action="../../controlador/ctrolLogin.php" method="POST">
      <img class="mb-4" src="../dashboard/imagenes/logo2.png" alt="" width="140" height="140">
      <h3 class="h3 mb-3 font-weight-normal">Por favor, inicie sesión</h3>

      <input type="email" id="Correo" name="Correo" class="form-control" placeholder="Correo electrónico" required autofocus>
      <input type="password" id="Contrasena" name="Contrasena" class="form-control" placeholder="Contraseña" required>

      <div class="input-group-append">
        <button id="show_password" class="btn btn-primary" type="button" > <span class="fa fa-eye-slash icon" ><span></button>
      </div>

      <div class="input-group-append"> <span class="input-group-text">
        <input ID="ShowPassword" type="checkbox"/>
        </span> </div>
      </div>
      
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" name="terms"> Recúerdame
        </label>
      </div>
      <input class="btn btn-lg btn-primary btn-block" type="submit" value="Iniciar sesión">
      <input class="btn btn-lg btn-primary btn-block" type="button" value="Registrarse" onclick="window.location='check-in.php'">
      <br>
      <p><a class="btn btn-lg btn-primary" href="javascript: history.go(-1)">Volver</a></>
      <p>&copy; 2020 WhitUs Inc. &middot; <br><a href="#">Términos  &middot;</a><a href="#"> Condiciones</p>
    </form>
  </body>
</html>

<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("txtPassword");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Contrasena').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>
