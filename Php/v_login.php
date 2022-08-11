<?php

include("c_login.php");
include("controlador.php");

if (isset($_POST["btn_ingresar"])) {
	if (ctrlVacios()) {
		if (ctrlExistenciaAdmin()) {
			echo '<script> location.href= "v_menu.php"; </script>';
		} else {
			if (ctrlExistenciaClient()) {
				echo '<script> location.href= "index_Cliente.php"; </script>';
			} else {
				echo '<script> alert("Error, las credenciales no coinciden..."); location.href= "../index.html"; </script>';
			}
		}
	} else {
		echo '<script> alert("Error, no deben existir campos vacíos..."); location.href= "../index.html"; </script>';
	}
}
