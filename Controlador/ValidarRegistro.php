<?php 
session_start();
extract ($_POST);
require "../Modelo/ConexionBasesDatos.php";
require "../Modelo/Person.php";
ini_set('date.timezone','America/Bogota');
                  $fecha = date("Y-m-d H:i:s");
$btn = $_GET['btn'];
$obj = new Person();

if($btn == 1){
	$obj->RegistrarPerson($_POST['cedula'],$fecha,$_POST['arl'],$_POST['empresa'],$_POST['cargo'],$_POST['nit'],$_POST['autoriza'],$_POST['desde'],$_POST['hasta'],$_POST['vehiculo'],$_POST['placa'],$_POST['marca'],$_POST['codigo'],$_POST['nota'],$_POST['id']);
	$resultado=$obj->IngresarPerson();
	header("location:../Vista/Admin/Consulta.php?msj=1");
}
if($btn == 2){
	$obj->RegistrarPerson($_POST['cedula'],$fecha,$_POST['arl'],$_POST['empresa'],$_POST['cargo'],$_POST['nit'],$_POST['autoriza'],$_POST['desde'],$_POST['hasta'],$_POST['vehiculo'],$_POST['placa'],$_POST['marca'],$_POST['codigo'],$_POST['nota'],$_POST['id']);
	$resultado=$obj->SalidaPerson();
	header("location:../Vista/Admin/Consulta.php?msj=2");
}


?>