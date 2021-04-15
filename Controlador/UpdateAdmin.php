<?php
session_start();
extract($_POST); 
require "../Modelo/ConexionBasesDatos.php";
require "../Modelo/Admin.php";
ini_set('date.timezone','America/Bogota');
                  $fecha = date("Y-m-d H:i:s");
$obj= new Admin();

$obj->CrearAdmin($_POST['cedula'],$_POST['nombre'],$_POST['apellido'],$_POST['key2'],$_POST['area'],$_POST['cargo'],$_POST['empresa'],$fecha,$_POST['id']);

$resultado = $obj->ActualizarAdmin();
if ($resultado)
	header ("location:../Vista/Admin/ConsultarAdmin.php?msj=4");
else
	header ("location:../Vista/Admin/ConsultarAdmin.php?msj=3");

?>