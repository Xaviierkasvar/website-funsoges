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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="stylesheet" href="../Css/bootstrap.min.css">
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
            <a href="UserAdmin.php?"><img src="../img/16.png" width="60" height="60" class="img-fluid "></a>
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
          <div class="col-8 mx-auto">
            <div class="col-3 float-left"><label><strong>Desde:</strong></label></div>
            <div class="col-5 float-left"><label><strong>Hasta:</strong></label></div>
          </div>
          <div class="col-9 mx-auto">
            <div class="input-group">
              <form action="../../Controlador/Numbers.php" method="POST">
                 <div class="input-group">
                    <input type="date" placeholder="Desde" name="search1" required id="search1" class="form-control">
                    <input type="date" placeholder="hasta" name="search2" required id="search2" class="form-control">
                    <select class="custom-select" name="query" id="query">
                      <option selected value="ingreso">Ingreso</option>
                      <option value="salida">Salida</option>
                      <option value="ingresoher">Ingreso Herramientas</option>
                      <option value="salidaher">Salida Herramientas</option>
                    </select>
                    <div class="input-group-prepend">
                      <button class="btn btn-dark" type="submit">Consultar</button>
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