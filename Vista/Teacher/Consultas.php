<?php  
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user'])){
  header("location:../../index.php?x=1");//x=1 significa que no han iniciado sesión
}
if (!isset($_REQUEST['pag']))
  $pag='contenido';
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
    <title>Consultar</title>
  </head>
  <body background="../img/20.jpg">
    <div class="container-fluid">
      <div class="row">
        <header class="col-12">
          <div class="float-left">
            <a href="UserOper.php?"><img src="../img/16.png" width="60" height="60" class="img-fluid "></a>
          </div>
          <div class="float-right">
            <a href="../salir.php"><img src="../img/salir.svg" width="60" height="60" align="bottom"></a>
          </div>
        </header>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <section class="col-12">
          <div class="col-6 mx-auto">
            <div class="input-group">
              <form action="../../Controlador/SearchOp.php" method="POST">
                 <div class="input-group">
                    <input type="text" name="search" required id="search" class="form-control">
                    <select class="custom-select" name="query" id="query">
                      <option selected value="selec">Seleccionar</option>
                      <option value="person">Personal</option>
                      <option value="veh">Vehiculos</option>
                      <option value="comp">Computadora</option>
                      <option value="her">Herramienta</option>
                    </select>
                    <div class="input-group-prepend">
                      <button class="btn btn-dark" type="submit">Buscar</button>
                    </div>
                  </div>
              </form>
            </div>
          </div>
          <div><?php include $pag.".php"; ?></div>
        </section>
      </div>
    </div>
        <footer>
          <div class="fixed-bottom justify bg-dark">
            <h5 class="tb">Todos los derechos reservados &copy. SADIYS (Sistema Automatizado Ingreso y Salida)  Junio-2018</h5>
          </div>
        </footer>
    </div>
  </body>
</html>