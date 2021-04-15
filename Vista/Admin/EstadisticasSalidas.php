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
                        <th>ARL</th>
                        <th>Empresa</th>
                        <th>Cargo</th>
                        <th>NIT</th>
                        <th>Autorizacion</th>
                        <th>Desde</th>
                        <th>Hasta</th>
                        <th>Vehiculo</th>
                        <th>Placa</th>
                        <th>Portatil</th>
                        <th>Codigo</th>
                        <th>Nota</th>
                        </tr>
                      <?php
                      $resultado=$clase->EsSal($desde,$hasta);
                      $numperson = $resultado->num_rows;
                      $resultado1=$clase->EsSalVeh($desde,$hasta);
                      $numveh = $resultado1->num_rows;
                      $resultado2=$clase->EsSalPor($desde,$hasta);
                      $numcom = $resultado2->num_rows;
                      echo '<tr>
                          <td><strong>Consolidado</strong></td>
                          <td colspan="11"><strong>'.$numperson.'</strong></td>
                          <td colspan="2"><strong>'.$numveh.'</strong></td>
                          <td colspan="2"><strong>'.$numcom.'</strong></td>
                        </tr>';
                      $resultado=$clase->ConsultaSalida($desde,$hasta);
                      while($registro = $resultado->fetch_array()){
                      echo '<tr>
                          <td>'.$registro['fec_ingreso'].'</td>
                          <td>'.$registro['fec_salida'].'</td>
                          <td>'.$registro['cedula'].'</td>
                          <td>'.$registro['nom_tra'].'</td>
                          <td>'.$registro['ape_tra'].'</td>
                          <td>'.$registro['arl_tra'].'</td>
                          <td>'.$registro['emp_tra'].'</td>
                          <td>'.$registro['carg_tra'].'</td>
                          <td>'.$registro['nit'].'</td>
                          <td>'.$registro['autoriza'].'</td>
                          <td>'.$registro['desde'].'</td>
                          <td>'.$registro['hasta'].'</td>
                          <td>'.$registro['tipo_veh'].'</td>
                          <td>'.$registro['placa_veh'].'</td>
                          <td>'.$registro['marca_por'].'</td>
                          <td>'.$registro['cod_por'].'</td>
                          <td>'.$registro['nota'].'</td>
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