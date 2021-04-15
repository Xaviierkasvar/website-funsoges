<!doctype html>
<html lang="es">
  <head>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <section class="col-12">
          <div>
            <table class="table text-center small">
              <tr class="info">
                        <th>Fecha ingreso</th>
                        <th>Fecha salida</th>
                        <th>cedula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Tipo herramienta</th>
                        <th>Cantidad de herramientas</th>
                        </tr>
                      <?php
                      require "../../Modelo/ConexionBasesDatos.php";
                      require "../../Modelo/Query.php";
                      $clase = new Query();
                      $search = $_GET['search'];
                      $resultado=$clase->ConsultaHerramienta($search);
                      $filas=mysqli_num_rows($resultado);
                      if ($filas > 1) {
                      $resultado=$clase->ConsultarHerramienta($search);
                      while($registro = $resultado->fetch_array()){
                      echo '<tr>
                          <td>'.$registro['fec_ingreso'].'</td>
                          <td>'.$registro['fec_salida'].'</td>
                          <td>'.$registro['cedula'].'</td>
                          <td>'.$registro['nom_tra'].'</td>
                          <td>'.$registro['ape_tra'].'</td>
                          <td>'.$registro['tipo_her'].'</td>
                          <td>'.$registro['can_her'].'</td>
                        </tr>';}  
                      $resultado=$clase->ConsultarTipoHerramienta($search);
                      while($registro = $resultado->fetch_array()){
                      echo '<tr>                      
                          <td>'.$registro['fec_ingreso'].'</td>
                          <td>'.$registro['fec_salida'].'</td>
                          <td>'.$registro['cedula'].'</td>
                          <td>'.$registro['nom_tra'].'</td>
                          <td>'.$registro['ape_tra'].'</td>
                          <td>'.$registro['tipo_her'].'</td>
                          <td>'.$registro['can_her'].'</td>
                        </tr>';}     
                      
                      }
                      else {
                        header("location:Consultas.php?pag=contenido&msj=2&search=$search");
                      }
                      ?>
            </table>
          </div>
        </section>
      </div>
    </div>
        <footer>
        </footer>
    </div>
  </body>
</html>