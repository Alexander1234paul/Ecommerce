<?php

use LDAP\Result;

include("m_conexion.php");
function clientRegister()
{
    $cedula = $_POST['txt_cli_cedula'];
    $nombres = $_POST['txt_cli_nombres'];
    $apellidos = $_POST['txt_cli_apellidos'];
    $email = $_POST['txt_cli_email'];
    $direccion = $_POST['txt_cli_direccion'];
    $telefono = $_POST['txt_cli_telefono'];
    $password = $_POST['txt_cli_password'];

    $sqlInsertPeople = "INSERT INTO `tbl_personas`(`NOMBRES`, `APELLIDOS`, `EMAIL`, `PASS`) VALUES ('$nombres','$apellidos','$email','$password')";
    $resultPeople = EjecutarConsulta($sqlInsertPeople);
    $sqlQueryPeople = "SELECT `ID_PERSONA`, `NOMBRES`, `APELLIDOS`, `EMAIL`, `PASS` FROM `tbl_personas` where nombres='$nombres' and apellidos='$apellidos' ";
    $resultQueryPeople = EjecutarConsulta($sqlQueryPeople);
    if ($resultQueryPeople->num_rows > 0) {
        $row = $resultQueryPeople->fetch_assoc();
        $idPeople = $row["ID_PERSONA"];
        $sqlInsertClient = "INSERT INTO `tbl_clientes`( `ID_PERSONA`, `CEDULA`, `TELEFONO`, `DIRECCION`) VALUES ('$idPeople','$cedula','$telefono','$direccion')";
        $resultInsertClient = EjecutarConsulta($sqlInsertClient);
    }
}
