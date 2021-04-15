<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user'])){
  header("location:../../index.php?x=1");//x=1 significa que no han iniciado sesión
}
require "../../Modelo/ConexionBasesDatos.php";
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
    <title>Consultar Admin</title>
  </head>
  <body background="../img/2.jpg">
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mx-auto">
            <a class=" float-left" href="Add.php"><img  src="../img/16.png" width="60" height="60" class="img-fluid "></a>
            <a class=" float-right" href="../salir.php"><img src="../img/salir.svg" width="60" height="60" align="bottom"class="img-fluid"></a>
            <h1 class="text-center m-3" style="color:white;">Consultar Administrador</h1>            
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-4">
            <?php
    # definimos la carpeta destino
    $carpetaDestino="../img/fotos/";
 
    # si hay algun archivo que subir
    if(isset($_FILES["archivo"]) && $_FILES["archivo"]["name"][0])
    {
 
        # recorremos todos los arhivos que se han subido
        for($i=0;$i<count($_FILES["archivo"]["name"]);$i++)
        {
 
            # si es un formato de imagen
            if($_FILES["archivo"]["type"][$i]=="image/jpeg" || $_FILES["archivo"]["type"][$i]=="image/pjpeg" || $_FILES["archivo"]["type"][$i]=="image/gif" || $_FILES["archivo"]["type"][$i]=="image/png")
            {
 
                # si exsite la carpeta o se ha creado
                if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
                {
                    $origen=$_FILES["archivo"]["tmp_name"][$i];
                    $destino=$carpetaDestino.$_FILES["archivo"]["name"][$i];
 
                    # movemos el archivo
                    if(@move_uploaded_file($origen, $destino))
                    {
                        echo "<br>".$_FILES["archivo"]["name"][$i]." movido correctamente";
                    }else{
                        echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$i];
                    }
                }else{
                    echo "<br>No se ha podido crear la carpeta: ".$carpetaDestino;
                }
            }else{
                echo "<br>".$_FILES["archivo"]["name"][$i]." - NO es imagen jpg, png o gif";
            }
        }
    }else{
        echo "<br>No se ha subido ninguna imagen";
    }
    ?>
            <img class="img-thumbnail img-responsive" src="../img/fotos/14.png">
              <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data" name="inscripcion">
                <input type="file" name="archivo[]" multiple="multiple">
                <input type="submit" value="Enviar"  class="trig">
            </form>
          </div>
          <div class="col-4" style="margin-bottom: 60px;">
                        <?php
              if ($msj==1)
                 echo '<br><br><div class="alert alert-danger text-center">Administrador registrado exitosamente</div>';
               if ($msj==2)
                 echo '<br><br><div class="alert alert-info text-center">Error al intentar registrar el Administrador</div>';
               if ($msj==3)
                 echo '<br><br><div class="alert alert-info text-center">Error al intentar actualizar el Administrador</div>';
               if ($msj==4)
                 echo '<br><br><div class="alert alert-info text-center">Administrador actualizado exitosamente</div>';
              ?>
                  <form class="tc" action="../../Controlador/ValidarAdmin.php" method="get">
                      <label>Identificacion:</label>
                      <input type="number" placeholder="Digite numero" class="form-control" name="cedula" id="cedula" >
                      <button type="submint" class="btn btn-info">Consultar</button><br>
                      <label>Nombre:</label>
                      <input type="Text" class="form-control" disabled id="id">
                      <label>Apellido:</label>
                      <input type="Text" class="form-control" disabled id="id">
                      <label>Cargo:</label>
                      <input type="Text" class="form-control" disabled id="id">
                      <label>Empresa:</label>
                      <input type="Text" class="form-control" disabled id="id">
                      <label>Area:</label>
                      <input type="Text" class="form-control" disabled id="id">
                      <label>Clave:</label>
                      <input type="number" class="form-control" disabled id="id">
                  </form>
          </div>
          <div class="col-12 b-3 p-3">
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="fixed-bottom bg-dark">
        <h5 class="text-white text-center" style="font-size: 10px;">Todos los derechos reservados &copy. SADIYS (Sistema Automatizado Ingreso y Salida)  Junio-2018</h5>
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