<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user'])){
  header("location:../../index.php?x=1");//x=1 significa que no han iniciado sesión
}
require "../../Modelo/ConexionBasesDatos.php";
require "../../Modelo/Person.php";

$clase = new Person;

  $resultado=$clase->ConsultaPerson($_GET['cedula']);
      while($registro=$resultado->fetch_object())
{
    $ced = $registro->cedula;
    $nom = $registro->nom_tra;
    $ape = $registro->ape_tra;
    $arl = $registro->arl_tra;
    $emp = $registro->emp_tra;
    $car = $registro->carg_tra;
    $nit = $registro->nit;
    $aut = $registro->autoriza;
    $des = $registro->desde;
    $has = $registro->hasta;
    $not = $registro->nota;
    


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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
      <script type="text/javascript">
        alert("Consulta exitosa");
      </script>
      <script src="../Script/script.js" ></script>
    <title>Actualizar Person</title>
  </head>
  <body background="../img/2.jpg">
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mx-auto">
            <a class=" float-left" href="ConsultarPerson.php"><img  src="../img/16.png" width="60" height="60" class="img-fluid "></a>
            <a class=" float-right" href="../salir.php"><img src="../img/salir.svg" width="60" height="60" align="bottom"class="../img-fluid"></a>
            <h1 class="text-center m-3" style="color:white;">Actualizar Personal</h1>            
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-3">
            <img class="img-thumbnail img-responsive" src="../img/fotos/<?php echo $ced?>.jpg">  
            <form action="../../Controlador/UpdatePersonOp.php" method="post">
             <textarea class="form-control " value="<?php echo $not?>" name="nota" rows="5" id="nota" placeholder="Nota" ><?php echo $not?></textarea>
          </div>
          <div class="col-4 tf" style="margin-bottom: 60px;">                
                      <label>Nombre:</label>
                      <input type="Text" value="<?php echo $nom?>" name="nombre" class="form-control" id="nombre">
                      <label>Apellido:</label>
                      <input type="Text" value="<?php echo $ape?>" name="apellido" class="form-control" id="apellido">
                      <label>Cargo:</label>
                      <input type="Text" value="<?php echo $car?>" name="cargo" class="form-control" id="cargo">
                      <label>Empresa:</label>
                      <input type="Text" value="<?php echo $emp?>" name="empresa" class="form-control" id="empresa">
                      <label>ARL-Empresa:</label>
                      <input type="Text" value="<?php echo $arl?>" name="arl" class="form-control" id="arl">
                      <label>NIT-Empresa:</label>
                      <input type="number" value="<?php echo $nit?>" name="nit" placeholder="<?php echo $nit?>" class="form-control" id="nit">
                      <input type="number" value="<?php echo $ced?>" placeholder="<?php echo $ced?>" class="form-control dn" name="cedula" id="cedula" >
          </div>
          <div class="col-3 tf" style="margin-bottom: 60px;">
                    <label>Autorización SST:</label>
                    <input type="Text" value="<?php echo $aut?>" name="autoriza" class="form-control" id="autoriza">
                    <label>Desde:</label>
                    <input type="date" value="<?php echo $des?>" name="desde" class="form-control" id="desde">
                    <label>Hasta:</label>
                    <input type="date" value="<?php echo $has?>" name="hasta" class="form-control" id="hasta">
            <div class="col-6 mx-auto">
            <input type="submit" value="Actualizar" class="btn btn-info text-white">
            <input type="number"  value="<?php echo $_SESSION["id"]; ?>" placeholder="<?php echo $$_SESSION["id"];?>" class="form-control dn"  name="id" id="id">
            </form>
          <div class="col-12 b-3 p-3">
          </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="fixed-bottom bg-dark">
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