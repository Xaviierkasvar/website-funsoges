<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user'])){
  header("location:../../index.php?x=1");//x=1 significa que no han iniciado sesión
}
require "../../Modelo/ConexionBasesDatos.php";
$ced=$_GET['cedula'];
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
      <script type="text/javascript">
        alert("No se encuentra registrado en la base de datos");
      </script>
      <script src="../Script/script.js" ></script>
    <title>Registrar Person</title>
  </head>
  <body background="../img/2.jpg">
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mx-auto">
            <a class=" float-left" href="ConsultarPerson.php"><img  src="../img/16.png" width="60" height="60" class="img-fluid "></a>
            <a class=" float-right" href="../salir.php"><img src="../img/salir.svg" width="60" height="60" align="bottom"class="img-fluid"></a>
            <h1 class="text-center m-3" style="color:black;">Agregar Nuevo Personal</h1>            
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-3">
            <img class="img-thumbnail img-responsive" src="../img/fotos/<?php echo $ced?>.jpg">  
            <form action="../../Controlador/AddPersonOp.php" method="POST">
             <textarea class="form-control " value="" name="nota" rows="5" id="nota" placeholder="Nota"></textarea>
          </div>
          <div class="col-4 tf" style="margin-bottom: 60px;">                 
                      <label>Identificacion:</label>
                      <input type="number" value="<?php echo $ced;?>" class="form-control" disabled>                      
                      <label>Nombres:</label>
                      <input type="Text" name="nombre" required class="form-control" id="nombre">
                      <label>Apellidos:</label>
                      <input type="Text" name="apellido" required class="form-control" id="apellido">
                      <label>Cargo:</label>
                      <input type="Text" name="cargo" required class="form-control" id="cargo">
                      <label>Area:</label>
                      <input type="Text" name="area" required class="form-control" id="area">
                      <label>Empresa:</label>
                      <input type="Text" name="empresa" required class="form-control" id="empresa">
                      <label>ARL:</label>
                      <input type="Text" name="arl" required class="form-control" id="arl">
                      <label>NIT:</label>
                      <input type="Text" name="nit" required class="form-control" id="nit">
                      <input type="text" value="<?php echo $ced;?>" class="form-control dn" placeholder="Digite numero" id="cedula" name="cedula">
        </div>
        <div class="col-3 tf" style="margin-bottom: 60px;">   
                    <label>Autorización SST:</label>
                    <input type="Text" value="" name="autoriza" required class="form-control" id="autoriza">
                    <label>Desde:</label>
                    <input type="date" value="" name="desde" required class="form-control" id="desde">
                    <label>Hasta:</label>
                    <input type="date" value="" name="hasta" required class="form-control" id="hasta">
            <div class="col-6 mx-auto">
            <input type="submit" value="Guardar" class="btn btn-info text-white">
            <input type="number"  value="<?php echo $_SESSION["id"]; ?>" placeholder="<?php echo $$_SESSION["id"];?>" class="form-control dn"  name="id" id="id">
            </form>
      </div>
    </section>
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