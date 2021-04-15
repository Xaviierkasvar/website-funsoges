<?php 
session_start();
extract ($_POST);
require "../Modelo/ConexionBasesDatos.php";

$login= ($_POST['usuario']);
$clave= md5($_POST['clave']);

$objConexion=Conectarse();
$sql="select * from administradores where num_cedula='$login' and clave='$clave'";
$sql1="select * from operador where ced_op='$login' and clave='$clave'";

$resultado=$objConexion->query($sql);
$resultado1=$objConexion->query($sql1);

$filas=mysqli_num_rows($resultado);
if($filas == 1){
	$usuario=$resultado->fetch_object() or die ("Error");
	$_SESSION['user'] = $usuario->num_cedula;
	header("location:../Vista/Admin/UserAdmin.php?cedula=".$login."");
}
$filas1=mysqli_num_rows($resultado1);
if($filas1 == 1){
	$usuario=$resultado1->fetch_object() or die ("Error");
	$_SESSION['user'] = $usuario->ced_op;
	header("location:../Vista/Oper/UserOper.php?cedula=".$login."");
}
?>
<script type="text/javascript">
	window.location.href="../index.php?x=1";
</script>