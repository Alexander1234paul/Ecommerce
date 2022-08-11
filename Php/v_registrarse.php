<?php
	include("c_registro.php");	
    include("controlador.php");
	if(isset($_POST["btn_registrarse"]))
	{
		if(ctrlVaciosClient())
		{
			if(clientRegister())
			{
				echo '<script> alert("correcto");  </script>';
			}else{
				echo '<script> alert("Error, insertarpersona"); location.href= "../index.html"; </script>';
			}
			
		}
		else
		{
			echo '<script> alert("Error, no deben existir campos vacíos..."); location.href= "../index.html"; </script>';
		}
	}
