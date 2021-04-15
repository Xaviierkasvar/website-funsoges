<?php
session_start();
extract ($_POST);
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Oper.php";
ini_set('date.timezone','America/Bogota');
                  $fecha = date("Y-m-d H:i:s");
$obj=new Oper();
$obj->CrearOper($_POST['cedula'],$_POST['nombre'],$_POST['apellido'],$_POST['key2'],$_POST['area'],$_POST['cargo'],$_POST['empresa'],$fecha,$_POST['id']);
$resultado=$obj->AgregarOper();
if ($resultado) 
	header("location:../Vista/Admin/ConsultarOper.php?msj=1");
else
	header("location:../Vista/Admin/ConsultarOper.php?msj=2");