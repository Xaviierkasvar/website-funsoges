<?php
session_start();
extract ($_POST);
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Person.php";
ini_set('date.timezone','America/Bogota');
                  $fecha = date("Y-m-d H:i:s");
$obj=new Person();
$obj->CrearPerson($_POST['cedula'],$_POST['nombre'],$_POST['apellido'],$fecha,$_POST['arl'],$_POST['empresa'],$_POST['cargo'],$_POST['nit'],$_POST['autoriza'],$_POST['desde'],$_POST['hasta'],$_POST['nota'],$_POST['id']);
$resultado=$obj->AgregarPerson();
if ($resultado) 
	header("location:../Vista/Oper/ConsultarPerson.php?msj=1");
else
	header("location:../Vista/Oper/ConsultarPerson.php?msj=2");