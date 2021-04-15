<?php
require "../../Modelo/ConexionBasesDatos.php";
require "../../Modelo/Query.php";
$clase = new Query();
$desde = $_GET['desde'];
$hasta = $_GET['hasta'];
?>
<!doctype html>
<html lang="es">
  <head>
    <title>Consultar</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <section class="col-12">
          <div>
            <table class="table text-center table-hover small">
              <tr class="info">
                        <th>Fecha ingreso</th>
                        <th>Fecha salida</th>
                        <th>cedula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Tipo Herramienta</th>
                        <th>Cantidad Herramientas</th>
                        </tr>
                      <?php
                      $resultado=$clase->EsSalHer($desde,$hasta);
                      $suma=$clase->EsCaHer($desde,$hasta);
                      $fila=$suma->fetch_assoc();
                      $sum = $fila['total'];
                      $numher = $resultado->num_rows;
                      echo '<tr>
                          <td><strong>Consolidado--></strong></td>
                          <td colspan="5"><strong>'.$numher.'</strong></td>
                          <td ><strong>'.$sum.'</strong></td>
                        </tr>';
                      $resultado=$clase->ConsultarSalidaHerramienta($desde,$hasta);
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