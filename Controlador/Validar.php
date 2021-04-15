<?php 
session_start();
extract ($_POST);
require "../Modelo/ConexionBasesDatos.php";
require "../Modelo/Person.php";

$clase = new Person();

  $resultado=$clase->ConsultarPerson($_GET['cedula']);
$usuario = $_GET['cedula'];

$filas=mysqli_num_rows($resultado);
if($filas > 0 ){
	header("location:../Vista/Admin/Registro.php?cedula=".$usuario."");
}
if($filas < 1){
	header("location:../Vista/Admin/Consulta.php?msj=3");
}
?>