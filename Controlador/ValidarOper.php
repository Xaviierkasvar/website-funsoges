<?php 
session_start();
extract ($_POST);
require "../Modelo/ConexionBasesDatos.php";
require "../Modelo/Oper.php";

$clase = new Oper;

  $resultado=$clase->ConsultarOper($_GET['cedula']);
$usuario = ($_GET['cedula']);

$filas=mysqli_num_rows($resultado);
if($filas > 0 ){
	header("location:../Vista/Admin/ActualizarOper.php?cedula=".$usuario."");
}
if($filas < 1){
	header("location:../Vista/Admin/AddOper.php?cedula=".$usuario."");
}
?>