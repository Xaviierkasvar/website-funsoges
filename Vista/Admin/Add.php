<?php  
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user'])){
  header("location:../../index.php?x=1");//x=1 significa que no han iniciado sesión
}
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
    <title>Agregar</title>
  </head>
  <body background="../img/3.jpg">
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
        <div class="col-8 mx-auto">
          <div class="text-center">
            <ul class="d-md-flex justify-content-between" style="list-style:none;">
              <li><a href="ConsultarAdmin.php"><img src="../img/6.png" align="bottom" width="100" height="100"class="img-fluid"><p class="text-dark"> Administrador</p></a></li>
                <li><a href="ConsultarOper.php"><img src="../img/15.png" align="bottom" width="100" height="100"class="img-fluid"><p class="text-dark">Operador</p></a></li>
                <li><a href="ConsultarPerson.php"><img src="../img/18.png" align="bottom" width="145" height="100"class="img-fluid"><p class="text-dark">Personal</p></a></li>
            </ul>
          </div>
        </div>
      </div>
      <footer>
        <div class="fixed-bottom justify bg-dark">
          <h5 class="tb" style="font-size: 10px;">Todos los derechos reservados &copy. SADIYS (Sistema Automatizado Ingreso y Salida)  Junio-2018</h5>
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