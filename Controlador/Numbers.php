<?php 
session_start();
extract ($_POST);
require "../Modelo/ConexionBasesDatos.php";
require "../Modelo/Query.php";
$clase = new Query();
$search1= $_POST['search1'];
$search2= $_POST['search2'];
$query= $_POST['query'];
$inicio = " 00:00:00";
$fin = " 23:59:59";
$desde = "$search1$inicio";
$hasta = "$search2$fin";


if ($query == 'ingreso') {
	header("location:../Vista/Admin/Estadisticas.php?pag=EstadisticasIngresos&desde=$desde&hasta=$hasta");
}
if ($query == 'salida') {
	header("location:../Vista/Admin/Estadisticas.php?pag=EstadisticasSalidas&desde=$desde&hasta=$hasta");
}
if ($query == 'ingresoher') {
	header("location:../Vista/Admin/Estadisticas.php?pag=EstadisticasIngresoHer&desde=$desde&hasta=$hasta");
}
if ($query == 'salidaher') {
	header("location:../Vista/Admin/Estadisticas.php?pag=EstadisticasSalidaHer&desde=$desde&hasta=$hasta");
}

 ?>