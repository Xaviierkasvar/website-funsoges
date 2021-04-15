<?php
require "../../Modelo/ConexionBasesDatos.php";
require "../../Modelo/Query.php";
$clase = new Query();
$search = $_GET['search'];
$resultado=$clase->ConsultaComputador($search);
$filas=mysqli_num_rows($resultado);
if($filas < 1){
  header("location:Consultas.php?pag=contenido&msj=5&search=$search");
}
?>
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
                        <th>Codigo</th>
                        <th>Portatil</th>
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
                        <th>Nota</th>
                        <th>Fecha actualizacion</th>
                        <th>Fecha registro</th>
                        </tr>
                      <?php
                      $resultado=$clase->ConsultarComputador($search);
                      while($registro = $resultado->fetch_array()){
                      echo '<tr>
                          <td>'.$registro['fec_ingreso'].'</td>
                          <td>'.$registro['fec_salida'].'</td>
                          <td>'.$registro['marca_por'].'</td>
                          <td>'.$registro['cod_por'].'</td>                          
                          <td>'.$registro['cedula'].'</td>
                          <td>'.$registro['nom_tra'].'</td>
                          <td>'.$registro['ape_tra'].'</td>
                          <td>'.$registro['arl_tra'].'</td>
                          <td>'.$registro['emp_tra'].'</td>
                          <td>'.$registro['carg_tra'].'</td>
                          <td>'.$registro['nit'].'</td>
                          <td>'.$registro['autoriza'].'</td>
                          <td>'.$registro['desde'].'</td>
                          <td>'.$registro['tipo_veh'].'</td>
                          <td>'.$registro['placa_veh'].'</td>
                          <td>'.$registro['hasta'].'</td>                          
                          <td>'.$registro['nota'].'</td>
                          <td>'.$registro['fec_actualizacion'].'</td>
                          <td>'.$registro['fec_registro'].'</td>
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