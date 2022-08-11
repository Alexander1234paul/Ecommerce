<?php
include("m_conexion.php");

function ctrlExistenciaAdmin()
{
	$USUARIO = $_POST['txt_ci_ruc'];
	$PASSWORD = $_POST['txt_password'];
	$sql = "SELECT tbl_personas.NOMBRES,tbl_personas.APELLIDOS,tbl_personas.email, tbl_personas.pass FROM
         tbl_usuarios INNER JOIN tbl_personas ON tbl_usuarios.ID_PERSONA=tbl_personas.ID_PERSONA WHERE
           tbl_personas.email='$USUARIO' AND tbl_personas.pass='$PASSWORD'";
	$result = EjecutarConsulta($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		iniciarSession($row['NOMBRES'], $row['APELLIDOS'], $row['email'], $row['pass']);
		return (TRUE);
	}
	return (FALSE);
}
function ctrlExistenciaClient()
{
	$USUARIO = $_POST['txt_ci_ruc'];
	$PASSWORD = $_POST['txt_password'];
	$sql = "SELECT tbl_personas.email, tbl_personas.pass FROM
         tbl_usuarios INNER JOIN tbl_personas  WHERE
           tbl_personas.email='$USUARIO' AND tbl_personas.pass='$PASSWORD'";
	$result = EjecutarConsulta($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		iniciarSession($row['NOMBRES'], $row['APELLIDOS'], $row['email'], $row['pass']);
		return (TRUE);
	}
	return (FALSE);
}
function iniciarSession($nombres, $apellidos, $email, $pass)
{
	try {
		session_start();
		$_SESSION['login'] = array();
		$_SESSION['login']['NOMBRES'] = $nombres;
		$_SESSION['login']['APELLIDOS'] = $apellidos;
		$_SESSION['login']['email'] = $email;
		$_SESSION['login']['pass'] = $pass;
	} catch (Exception $e) {
		echo '<script> alert("Error al iniciar sesión".$e->getMessage()) </script>';
	}
}
