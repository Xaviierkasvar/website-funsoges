<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user'])){
  header("location:../../index.php?x=1");//x=1 significa que no han iniciado sesión
}

if (!isset($_SESSION["id"])){
  $_SESSION["id"] = $_GET['cedula'];
}

require "../../Modelo/conexionBasesDatos.php";
require "../../Modelo/Admin.php";
$clase = new Admin;

  $resultado=$clase->ConsultarAdmin($_SESSION["id"]);
      while($registro=$resultado->fetch_object())
{
    $_SESSION["nom"] = $registro->nombre;
    $_SESSION["ape"] = $registro->apellido;
}  //cerrando el ciclo while

?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Css/bootstrap.min.css">    
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--Iconos--> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../Css/font-awesome.min.css">
    <link rel="stylesheet" href="../Css/style.css">
    <title>User Admin</title>
  </head>
  <body background="../img/3.jpg">
    <div class="container-fluid">
      <div class="row">
        <header class="col-12">
           <div class="float-left">
            <img  src="../img/6.png" width="50" height="50">
            <p class="text-dark tuser b-0">Usuario administrador:<br><?php echo $_SESSION["nom"];?> <?php echo $_SESSION["ape"];?></p>
          </div>
          <div>
            <a class=" float-right" href="../salir.php"><img src="../img/salir.svg" width="60" height="60" align="bottom"class="img-fluid"></a>
        </div>
      </div>
        </header>
        <div class="col-12 mx-auto p-3">
          <div class="text-center">
            <ul class="d-md-flex justify-content-between" style="list-style:none;">
                <li><a href="Add.php"><img src="../img/17.png" align="bottom" width="100" height="100"class="img-fluid"class="img-fluid"><p class="text-dark">Usuarios</p></a></li>
                </a><li><a href="Consulta.php"><img src="../img/5.png" align="bottom" width="123" height="100"class="img-fluid"><p class="text-dark">Registros</p></li>
                <li><a href="Consultas.php"><img src="../img/6.svg" align="bottom" width="100" height="100"class="img-fluid"><p class="text-dark">Consultas</p></a></li>
                <li><a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=sadiys_celsia_zf"><img src="../img/7.png" align="bottom" width="100" height="100"class="img-fluid"><p class="text-dark">Gestionar BD</p></a></li>
                <li><a href="Estadisticas.php"><img src="../img/8.png" align="bottom" width="100" height="100"class="img-fluid"><p class="text-dark">Estadisticas</p></a></li>
            </ul>
          </div>
        </div>
      </div>
      <footer>
        <div class="fixed-bottom bg-dark">
          <h5 class="tb">Todos los derechos reservados &copy. SADIYS (Sistema Automatizado Ingreso y Salida)  Junio-2018</h5>
        </div>
      </footer>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>