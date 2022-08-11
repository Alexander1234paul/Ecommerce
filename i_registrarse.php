<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>

<body>
    <div class="logotipo" align="center">
        <img src="img/logo.png" width="350" height="auto" alt="" />
    </div>
    <section class="form-login-registrase">
        <h5>Formulario Registro</h5>
        <form id="form1" name="form1" method="post" action="Php/v_registrarse.php">
            <input class="text-box" type="text" name="txt_cli_cedula" value="" placeholder="CI/RUC">
            <input class="text-box" type="text" name="txt_cli_nombres" value="" placeholder="Nombres">
            <input class="text-box" type="text" name="txt_cli_apellidos" value="" placeholder="Apellidos">
            <input class="text-box" type="text" name="txt_cli_email" value="" placeholder="Email">
            <input class="text-box" type="text" name="txt_cli_direccion" value="" placeholder="Dirección">
            <input class="text-box" type="text" name="txt_cli_telefono" value="" placeholder="Telefono">
            <input class="text-box" type="password" name="txt_cli_password" value="" placeholder="password">
            <input class="buttons" type="submit" name="btn_registrarse" value="Registrase">

        </form>
    </section>
</body>

</html>