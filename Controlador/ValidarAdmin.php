<?php 
session_start();
extract ($_POST);
require "../Modelo/ConexionBasesDatos.php";
require "../Modelo/Admin.php";

$clase = new Admin;

  $resultado=$clase->ConsultarAdmin($_GET['cedula']);
$usuario = ($_GET['cedula']);

$filas=mysqli_num_rows($resultado);
if($filas > 0 ){
	header("location:../Vista/Admin/ActualizarAdmin.php?cedula=".$usuario."");
}
if($filas < 1){
	header("location:../Vista/Admin/AddAdmin.php?cedula=".$usuario."");
}
?>