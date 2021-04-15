<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/style.css">

    <title>Consultar</title>
  </head>
  <body background="../img/20.jpg">
    <div class="container">
      <div class="row">
        <section class="col-12">
          <?php
              if (!isset($msj)){
                $msj=0;}
              
              if ($msj==1){
                 echo '<br><br><div class="alert alert-danger text-center">Por favor deplegar lista y <strong>seleccionar</strong> parametro de busqueda</div>';}
              if ($msj==2){
                 echo '<br><br><div class="alert alert-danger text-center">No se encontro registro de <strong>'.$search.'</strong> en la base de datos los parametros de busqueda: <strong>Numero de Cedula o Tipo de Herramienta.</strong></div>';}
              if ($msj==3){
                  $search = $_GET['search'];
                 echo '<br><br><div class="alert alert-danger text-center">No se encontro registro de <strong>'.$search.'</strong> en la base de datos los parametros de busqueda: <strong>Numero de Cedula.</strong></div>';}
              if ($msj==4){
                  $search = $_GET['search'];
                 echo '<br><br><div class="alert alert-danger text-center">No se encontro registro de <strong>'.$search.'</strong> en la base de datos los parametros de busqueda: <strong>Numero de placa.</strong></div>';}
              if ($msj==5){
                  $search = $_GET['search'];
                 echo '<br><br><div class="alert alert-danger text-center">No se encontro registro de <strong>'.$search.'</strong> en la base de datos los parametros de busqueda: <strong>Marca del computador.</strong></div>';}
              ?>
        </section>
      </div>
    </div>
        <footer>
          <div class="fixed-bottom justify bg-dark">
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