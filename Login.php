<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de Facturación</title>
<link rel="stylesheet" href="css/index.css">
</head>
	

<body>
	<div class="logotipo" align="center">
		<img src="img/logo.png" width="350" height="auto" alt=""/>
	  <p class="slogan">Un mundo de ideas...</p>
	</div>
	<section class="form-login">
		<h5>Formulario Login</h5>
		<form id="form1" name="form1" method="post" action="Php/v_login.php">
			<input class="text-box" type="text" name="txt_ci_ruc" value="" placeholder="CI/RUC">
			<input class="text-box" type="password" name="txt_password" value="admin" placeholder="Contraseña">
			<input class="buttons" type="submit" name="btn_ingresar" value="Ingresar">
    
			<p ></p><a href="i_registrarse.php">Registrarse</a></p>
		</form>
	</section>
</body>
</html>
