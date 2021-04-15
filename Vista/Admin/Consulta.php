<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user'])){
  header("location:../../index.php?x=1");//x=1 significa que no han iniciado sesión
}
if (!isset($_REQUEST['msj']))
  $msj=0;
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
    <title>Consulta</title>
  </head>
  <body background="../img/11.png">
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mx-auto">
            <a class=" float-left" href="UserAdmin.php"><img  src="../img/16.png" width="60" height="60" class="img-fluid "></a>
            <a class=" float-right" href="../salir.php"><img src="../img/salir.svg" width="60" height="60" align="bottom"class="img-fluid"></a>
            <h2 class="text-center text-white m-3">Control de Ingreso y Salida Celsia Z.F.</h2>    
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-2">
            <img class="img-thumbnail img-responsive" src="../img/fotos/14.png">
            <?php
              if ($msj==1)
                 echo '<br><br><div class="alert alert-info text-center">Ingreso exitoso</div>';
               if ($msj==2)
                 echo '<br><br><div class="alert alert-info text-center">Salida exitosa</div>';
               if ($msj==3)
                 echo '<br><br><div class="alert alert-danger text-center">La persona consultada no se encuentra registrada en la base de datos.</div>';
              ?>  
          </div>
          <div id="tquery" class="col-10 ">
            <table class="table table-hover table-responsive">
              <tbody>
                <tr>
                  <th>Nombres:</th>
                    <th>Apellidos:</th>
                    <th>Cargo:</th>
                  </tr>
              </tbody>
              <tbody>
                <tr>
                  <th>Empresa:</th>
                    <th>ARL:</th>
                    <th>NIT:</th>
                    <th></th>
                </tr>
              </tbody>
              <tbody>
                <tr>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <th>Autorizacion desde:</th>
                   <th>Hasta:</th>
                   <th>Autorizado SST:</th>
                  </tr>
              </tbody>
              <tbody>
                <tr>
                  
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-3">
            <form action="../../Controlador/Validar.php" method="GET">
              <input type="number" class="form-control" name="cedula" id="cedula" placeholder="Digite identificación">
              <button type="submint"  class="btn bg-info">Consultar</button>
            </form>
          </div>
          <div id="tquer" class="col-9 float-left">
              <form>
                <div class="form-group col-6 float-left">
                  <label for="sel1">Portatil:</label>
                    <select class="form-control" id="portatil" >
                      <option>No </option>
                      <option>Apple </option>
                      <option>Hewlett-Packard (HP)  </option>
                      <option>Samsung </option>
                      <option>Dell  </option>
                      <option>ACER  </option>
                      <option>Toshiba </option>
                      <option>Lenovo  </option>
                      <option>ASUS  </option>
                      <option>VAIO  </option>
                      <option>Sony Computer Entertainment </option>
                      <option>LG  </option>
                      <option>Alienware </option>
                      <option>Compaq  </option>
                      <option>Panasonic </option>
                      <option>IBM </option>
                      <option>Lanix </option>
                      <option>Gateway </option>
                      <option>Everex  </option>
                      <option>SimpleTech  </option>
                      <option>Fujitsu </option>
                      <option>Systemax  </option>
                      <option>Olivetti  </option>
                    </select>
                    <input type="text" class="form-control" id="numportatil" placeholder="Serial Portatil">
                </div>
                <div class="form-group col-6 float-right">
                  <label for="sel1">Vehiculo:</label>
                    <select class="form-control" id="vehiculo">
                      <option>No </option>
                      <option>Automovil </option>
                      <option>Motocicleta  </option>
                      <option>Tracto camion </option>
                      <option>Furgón  </option>
                      <option>Camión  </option>
                      <option>Grua </option>
                    </select>
                  <input type="text" class="form-control" id="plavehiculo" placeholder="Placa de Vehiculo:">
                </div>
              </form>
            </div>
          </div>
        </div>
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
           