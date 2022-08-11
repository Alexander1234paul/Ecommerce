<?php
function ctrlVacios()
{
	if (!empty($_POST['txt_ci_ruc']) && !empty($_POST['txt_password'])) {
		return (TRUE);
	}
	return (FALSE);
}
function ctrlVaciosClient()
{
	if (
		!empty($_POST['txt_cli_cedula']) && !empty($_POST['txt_cli_nombres'])
		&& !empty($_POST['txt_cli_apellidos']) && !empty($_POST['txt_cli_email']) && !empty($_POST['txt_cli_direccion'])
		&& !empty($_POST['txt_cli_telefono'])
		&& !empty($_POST['txt_cli_password'])
	) {
		return (TRUE);
	}
	return (FALSE);
}
