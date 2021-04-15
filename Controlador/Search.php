<?php 
session_start();
extract ($_POST);
$search= $_POST['search'];
$query= $_POST['query'];

if($query == 'person'){
	header("location:../Vista/Admin/Consultas.php?pag=per&search=$search");
	}
if($query == 'veh'){
	header("location:../Vista/Admin/Consultas.php?pag=veh&search=$search");
}
if($query == 'comp'){
	header("location:../Vista/Admin/Consultas.php?pag=com&search=$search");
}
if($query == 'her'){
	header("location:../Vista/Admin/Consultas.php?pag=her&search=$search");
}
?>