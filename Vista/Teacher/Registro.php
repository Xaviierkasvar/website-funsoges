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
    $veh = $registro->tipo_veh;
    $pla = $registro->placa_veh;
    $mar = $registro->marca_por;
    $cod = $registro->cod_por;
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
    <script type="text/javascript" src="../Script/jquery.js"></script>
    <script src="../script/script.js" ></script>
    <title>Registro</title>
  </head>
  <body background="../img/11.png">
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mx-auto">
            <a class=" float-left" href="Consulta.php"><img  src="../img/16.png" width="60" height="60" class="img-fluid "></a>
            <a class=" float-right" href="../salir.php"><img src="../img/salir.svg" width="60" height="60" align="bottom"class="../img-fluid"></a>
            <h2 class="text-center text-white m-3">Control de Ingreso y Salida Celsia Z.F.</h2>            
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-3">
            <img class="img-thumbnail img-responsive" width="100%" height="100%" src="../img/fotos/<?php echo $ced?>.jpg">
          </div>
          <div id="tabla_datos" class="col-9">
            <table class="table table-hover table-responsive">
              <tbody>
                <tr>
                  <th class="text">Nombres:</th>
                  <td class="tr"><?php echo $nom?></td>
                  <th class="text">Apellidos:</th>
                  <td class="tr"><?php echo $ape?></td>
                  <th class="text">Cargo:</th>
                  <td class="tr"><?php echo $car?></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <th class="text">Empresa:</th>
                  <td class="tr"><?php echo $emp?></td>
                  <th class="text">ARL:</th>
                  <td class="tr"><?php echo $arl?></td>
                  <th class="text">NIT:</th>
                  <td class="tr"><?php echo $nit?></td>
                  <th></th>
                </tr>
              </tbody>
              <tbody>
                <tr>
                </tr>
              </tbody>
              <tbody>
                <tr class="bg-dark">
                  <th class="tt">Autorizacion ARL desde:</th>
                  <td style="color:lime; font-size:15px"><strong><?php echo $des?></strong></td>
                  <th class="tt">Hasta:</th>
                  <td style="color:lime; font-size:15px"><strong><?php echo $has?></strong></td>
                  <th class="tt">Autorizado SST:</th>
                  <td class="tr"><?php echo $aut?></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  
                </tr>
              </tbody>
            </table>
          </div>
          <div id="bt_registros" class="col-3">
            <form action="form1" id="form1" name="form1" method="post" style="color:orangered; font-size:25px; font-weight: 40px;">
                <div class="form-group">
                  <textarea class="form-control " value="<?php echo $not?>" name="nota" rows="5" id="nota" placeholder="Nota" ><?php echo $not?></textarea>
                  <input type="text" class="form-control invisible" id="cedula" name="cedula"  value="<?php echo $ced?>">
                </div>
                  <input type="submit" name="ingreso" value="Ingreso" class="btn bg-success text-white" onclick=this.form.action="../../Controlador/ValidarRegistroOp.php?btn=1">
                  <input type="submit" name="salida" value="Salida" class="btn bg-danger float-right text-white" onclick=this.form.action="../../Controlador/ValidarRegistroOp.php?btn=2" style="margin-top:05px;">
                  <input type="number" value="<?php echo $_SESSION["id"]; ?>" class="form-control dn" name="id" id="id">
                  <input type="text" value="<?php echo $arl ?>" class="form-control dn" name="arl" id="arl">
                  <input type="text" value="<?php echo $emp ?>" class="form-control dn" name="empresa" id="empresa">
                  <input type="text" value="<?php echo $car?>"class="form-control dn" name="cargo" id="cargo">
                  <input type="text" value="<?php echo $nit ?>" class="form-control dn" name="nit" id="nit">
                  <input type="text" value="<?php echo $aut ?>" class="form-control dn" name="autotiza" id="autotiza" style="display:none">
                  <input type="date" value="<?php echo $des ?>" class="form-control dn" name="desde" id="desde">
                  <input type="date" value="<?php echo $has ?>" class="form-control dn" name="hasta" id="hasta">
                  
          </div>
          <div id="vehiculos" class="col-9 float-left" style="font-family:sans-serif; font-size:20px;">
                <div class="form-group col-6 float-left">
                  <label class="tr">Vehiculo:</label>
                    <select class="form-control" name="vehiculo" id="vehiculo">
                      <option value="<?php echo $veh ?>"><?php echo $veh ?></option>
                      <option></option>
                      <option>Automovil </option>
                      <option>Motocicleta  </option>
                      <option>Tracto camion </option>
                      <option>Furgón  </option>
                      <option>Camión  </option>
                      <option>Grua </option>
                    </select>
                  <input type="text" class="form-control" name="placa" placeholder="Placa del vehiculo" id="placa" value="<?php echo $pla ?>">
                </div>
                <div id="portatil" class="form-group col-6 float-right">
                  <label class="tr">Portatil:</label>
                    <select class="form-control" name="marca" id="marca" >
                      <option value="<?php echo $mar ?>"><?php echo $mar ?></option>
                      <option></option>
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
                    <input type="text" class="form-control" name="codigo" placeholder="Numero de portatil" id="codigo" value="<?php echo $cod?>">
                </div>
              </form>
            <div id="">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                       <form method="post">
                        <!-------BOTON DEL MODAL------>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mimodal">Consultar herramientas</button>
                          <table class="table table-responsive"  id="tabla">
                            <tr class="fila-fija">
                              <td><select class="form-control" name="her[]">
                                        <option></option>
                                        <option>  ABANICOS  </option>
                                        <option>  ACOPLES NQ HA </option>
                                        <option>  ADAPTADOR   </option>
                                        <option>  ALICATE </option>
                                        <option>  ARNES </option>
                                        <option>  ARNES CON   ESLINGA </option>
                                        <option>  ASPIRADORA  </option>
                                        <option>  BARBIQUI  </option>
                                        <option>  BARRA </option>
                                        <option>  BARRA  DE HIERRO  </option>
                                        <option>  BARRERA CON TUBO  </option>
                                        <option>  BASE METALICA EN ANGULOS  </option>
                                        <option>  BATERIAS  </option>
                                        <option>  BATIMETRO </option>
                                        <option>  BLOWER 462000-B3  </option>
                                        <option>  BOMBA EDUCTORA DE ESPUMA  </option>
                                        <option>  BOMBA NEUMATICA </option>
                                        <option>  BOMBA PARA COMBUSTIBLE  </option>
                                        <option>  BOMBA NMONOFONICA </option>
                                        <option>  BOMBA MANUAL  </option>
                                        <option>  BOQUILLA DE SOLDAR  </option>
                                        <option>  BORNERO </option>
                                        <option>  BOTELLA ECETILENO </option>
                                        <option>  BROCA   </option>
                                        <option>  CABLES CPC Y TD1  </option>
                                        <option>  CAJAS DE HERRAMIENTAS </option>
                                        <option>  CALADORA  </option>
                                        <option>  CALIBRADOR  </option>
                                        <option>  CAMILLAS  </option>
                                        <option>  CANECAS PARA COMBUSTIBLE  </option>
                                        <option>  CARETA DE SOLDAR  </option>
                                        <option>  CARGADORES  </option>
                                        <option>  CARPA </option>
                                        <option>  CARPA BLANCA  </option>
                                        <option>  CARPA PLASTICA  </option>
                                        <option>  CARRETILLA  </option>
                                        <option>  CAUTIL  </option>
                                        <option>  CEPILLO DE ALAMBRE  </option>
                                        <option>  CHISPOMETRO HIPOTRONICS </option>
                                        <option>  CILINDRO DE BUTANO  </option>
                                        <option>  CILINDROS DE AIRE </option>
                                        <option>  CINCEL  </option>
                                        <option>  CINTAMETRICA  </option>
                                        <option>  CISAYA TIPO RATCHE  </option>
                                        <option>  COLOMBINAS  </option>
                                        <option>  COMPRENSOR  </option>
                                        <option>  CONECTOR ANCLAJE  </option>
                                        <option>  CONO DE SEGURIDAD </option>
                                        <option>  CONOS SALMONES  </option>
                                        <option>  CONTENEDOR  </option>
                                        <option>  CORTA FRIO  </option>
                                        <option>  CORTA VIDRIO  </option>
                                        <option>  CORTA TUBO  </option>
                                        <option>  CORTADOR DE EQUIPO OXICORTE </option>
                                        <option>  CORTADORADECONCRETO </option>
                                        <option>  DADOS </option>
                                        <option>  CUERPO DE ANDAMIOS  </option>
                                        <option>  DESTORNILLADOR  </option>
                                        <option>  DETECTOR DE FASE  </option>
                                        <option>  DENSIMETRO  </option>
                                        <option>  DIAGONALES  </option>
                                        <option>  DIFERENCIAL </option>
                                        <option>  DOBLADORA DE TUBO </option>
                                        <option>  DOBLADORA HIDRAULICA  </option>
                                        <option>  ELEVADOR  </option>
                                        <option>  EQUIPO ALZA ASISTIDA  </option>
                                        <option>  EQUIPO DE MONITOREO </option>
                                        <option>  EQUIPO DE SOLDADURA </option>
                                        <option>  EQUIPO OXICORTE </option>
                                        <option>  EQUIPOS DE PRUEBA </option>
                                        <option>  ESCALERAS   </option>
                                        <option>  ESCUADRA  </option>
                                        <option>  ESLINGAS  </option>
                                        <option>  ESMERIL </option>
                                        <option>  ESPATULA  </option>
                                        <option>  ESTUCHE DE ACOPLES  </option>
                                        <option>  EXACTO  </option>
                                        <option>  EXTENSIONES ELECTRICAS  </option>
                                        <option>  EXTINTOR  </option>
                                        <option>  EXTRACTOR </option>
                                        <option>  EXTROBOS DE ACERO </option>
                                        <option>  FILTROS </option>
                                        <option>  FLEXOMETRO  </option>
                                        <option>  FLOTADORA Y TUBOS </option>
                                        <option>  FOTOTACOMETRO </option>
                                        <option>  FUNDA DE ACERO  </option>
                                        <option>  GATO  </option>
                                        <option>  GRAPAS  </option>
                                        <option>  GRATA S </option>
                                        <option>  GRILLETE  </option>
                                        <option>  GUADAÑADORA </option>
                                        <option>  GUANTES DIELECTRICOS  </option>
                                        <option>  HOMBRE SOLO </option>
                                        <option>  HORIZONTALES  </option>
                                        <option>  HORNO PARA SOLDADURA  </option>
                                        <option>  IMPRESORA </option>
                                        <option>  JUEGO DE BROCAS </option>
                                        <option>  JUEGO DE COPA </option>
                                        <option>  JUEGO DE DADO </option>
                                        <option>  JUEGO DE LLAVES MIXTAS  </option>
                                        <option>  JUEGO DE DESTORNILLADORES </option>
                                        <option>  JUEGO DE EXPANDER </option>
                                        <option>  JUEGO DE LLAVES   </option>
                                        <option>  JUEGO DE LLAVES ALLEN </option>
                                        <option>  JUEGO DE LLAVES HEXAGONALES </option>
                                        <option>  JUEGO DE PINZA  </option>
                                        <option>  JUEGO DE PUESTA A TIERRA  </option>
                                        <option>  JUEGO DE PUNTAS </option>
                                        <option>  JUEGO DE RATCHE </option>
                                        <option>  JUEGO DE MANOMETRO  </option>
                                        <option>  JUEGO DE TARRAJA  </option>
                                        <option>  KIOSCO AZUL </option>
                                        <option>  KIT BLOQUEO </option>
                                        <option>  KIT DE HERRAMIENTAS MANUAL  </option>
                                        <option>  KIT DE LLAVES   </option>
                                        <option>  LIJADORA  </option>
                                        <option>  LIMA  </option>
                                        <option>  LIMPIA BOQUILLA </option>
                                        <option>  LINTERNA  </option>
                                        <option>  LLAVE DE BOCA </option>
                                        <option>  LLAVE DE TUBO </option>
                                        <option>  LLAVE EXPANSIVA </option>
                                        <option>  LLAVE INGLESA Y OTROS </option>
                                        <option>  LLAVES  </option>
                                        <option>  LLAVES DE PUNTA </option>
                                        <option>  LLAVES MIXTAS </option>
                                        <option>  LLAVES STANLEY  </option>
                                        <option>  MACHETE </option>
                                        <option>  MALETA DE INYECCION CORRIENTE   </option>
                                        <option>  MANGUERAS </option>
                                        <option>  MANILAS </option>
                                        <option>  MANOMETRO </option>
                                        <option>  MAQUINA ACKER </option>
                                        <option>  MAQUINA DE SOLDAR </option>
                                        <option>  MAQUINA LINCLN COMPLETA </option>
                                        <option>  MARCADOR ELECTRICO  </option>
                                        <option>  MARCO  DE SEGUETA </option>
                                        <option>  MARTILLO EXTRACTOR  </option>
                                        <option>  MARTILLO  </option>
                                        <option>  MASCARILLA  </option>
                                        <option>  MESA METALICA CON ACCESORIOS  </option>
                                        <option>  MESA PLASTICA   </option>
                                        <option>  METRO </option>
                                        <option>  MONA  </option>
                                        <option>  MOTOBOMBA ELECTRICA </option>
                                        <option>  MOTOR   </option>
                                        <option>  MOTOSIERRA  </option>
                                        <option>  MOTORTOOL </option>
                                        <option>  MULTIMETRO  </option>
                                        <option>  MULTIMETRO DIGITAL  </option>
                                        <option>  MULTIMETRO FLUKE  </option>
                                        <option>  NAVAJA  </option>
                                        <option>  NIVEL </option>
                                        <option>  PALANCA </option>
                                        <option>  PALAS </option>
                                        <option>  PALUSTRE  </option>
                                        <option>  PECHERA PARA PULIR  </option>
                                        <option>  PELACABLES  </option>
                                        <option>  PESCADOR NQ </option>
                                        <option>  PESO ELECTRONICO  </option>
                                        <option>  PICOS </option>
                                        <option>  PINZAS  </option>
                                        <option>  PINZA VOLTIAMPERIMETRICA  </option>
                                        <option>  PISTOLA DE CALOR  </option>
                                        <option>  PISTOLA INFRARILA IRS </option>
                                        <option>  PISTOLAS SILICONA </option>
                                        <option>  PISTOLA DE IMPACTO  </option>
                                        <option>  PLANTA ELECTRICA  </option>
                                        <option>  PLATAFORMAS </option>
                                        <option>  PLUMA   GRUA  </option>
                                        <option>  POLEAS  </option>
                                        <option>  PONCHADORA  </option>
                                        <option>  PONCHADORA HIDRAULICA </option>
                                        <option>  PORTA ELECTRODO </option>
                                        <option>  POWER TEAM  </option>
                                        <option>  PRENSA  </option>
                                        <option>  PROGRAMADOR   </option>
                                        <option>  PULIDORA  </option>
                                        <option>  PUNTA PARA MARTILLO NEUMATI </option>
                                        <option>  RADIO   </option>
                                        <option>  RACHES  </option>
                                        <option>  RADIO   </option>
                                        <option>  RANA  COMPACTADORA  </option>
                                        <option>  RASTRILLO   </option>
                                        <option>  REGLAS  </option>
                                        <option>  REGLA VIBRADORA </option>
                                        <option>  REMACHADORA </option>
                                        <option>  RIELES  </option>
                                        <option>  SECUENCIMETRO </option>
                                        <option>  SEGUETA </option>
                                        <option>  SILLA PLASTICA  </option>
                                        <option>  SALTARIN  </option>
                                        <option>  SIERRA ELECTRICA  </option>
                                        <option>  SOPORTE DE GATO </option>
                                        <option>  TACOMETRO </option>
                                        <option>  TALADRO </option>
                                        <option>  TALCOMETRO  </option>
                                        <option>  TANQUE  </option>
                                        <option>  TARRAJA </option>
                                        <option>  TD1-BALIJA  </option>
                                        <option>  TENSIOMETRO </option>
                                        <option>  TERMO </option>
                                        <option>  TERMO HIGRAMETRO  </option>
                                        <option>  TERMOMETRO  DIGITAL </option>
                                        <option>  TIJERA PARA CORTAR  LAMINA  </option>
                                        <option>  TORQUE 02 </option>
                                        <option>  TORQUIMETRO </option>
                                        <option>  TRACTOR DE AIRE </option>
                                        <option>  TRIPODE </option>
                                        <option>  TUBO LISO </option>
                                        <option>  TUBERIA NQ  </option>
                                        <option>  UNIDAD DE CD  </option>
                                        <option>  VANGUAR 8000  </option>
                                        <option>  VENTILADORES  </option>
                                        <option>  VIBRA COMPACTADORA  </option>
                                        <option>  VIBRADOR ELECTRICO  </option>
                                        <option>  VINOCULARES </option>
                                        <option>  VOLTIMETRO FLUKE  </option>
                                      </select></td>
                              <td><input class="form-control" required type="number" name="can[]" placeholder="cantidad de herramienta"/></td>
                              <td class="eliminar"><input type="button" class="btn btn-danger"  value="Menos -"/></td>
                            </tr>
                          </table>
                            <div class="btn float-left">
                              <input type="submit" name="insertar2" value="Salida herramientas" class="btn btn-danger"/>
                            </div>
                            <div class="btn float-right">
                              <input type="submit" name="insertar1" value="Ingresar herramientas" class="btn btn-primary"/>
                              <button id="adicional" name="adicional" type="button" class="btn btn-warning"> Más + </button>
                            </div>
                        </form>
                </div>
                  <?php 
                  $cedu = $_GET['cedula'];
                  ini_set('date.timezone','America/Bogota');
                  $fecha = date("Y-m-d H:i:s");
                    //////////////////////// PRESIONAR EL BOTÓN //////////////////////////
                    if(isset($_POST['insertar1']))
                    {
                    $items1 = ($_POST['her']);
                    $items2 = ($_POST['can']);
                     
                    ///////////// SEPARAR VALORES DE ARRAYS, EN ESTE CASO SON 4 ARRAYS UNO POR CADA INPUT (ID, NOMBRE, CARRERA Y GRUPO////////////////////)
                    while(true) {

                        //// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
                        $item1 = current($items1);
                        $item2 = current($items2);
                        
                        ////// ASIGNARLOS A VARIABLES ///////////////////
                        $tipo_her=(( $item1 !== false) ? $item1 : ", &nbsp;");
                        $can_her=(( $item2 !== false) ? $item2 : ", &nbsp;");

                        //// CONCATENAR LOS VALORES EN ORDEN PARA SU FUTURA INSERCIÓN ////////
                        $valores='('.$cedu.',"'.$fecha.'","'.$tipo_her.'","'.$can_her.'","'.$_SESSION["id"].'"),';

                        //////// YA QUE TERMINA CON COMA CADA FILA, SE RESTA CON LA FUNCIÓN SUBSTR EN LA ULTIMA FILA /////////////////////
                        $valoresQ= substr($valores, 0, -1);
                        
                        ///////// QUERY DE INSERCIÓN ///////////////////////////
                        $resultado=$clase->AgregarTools($valoresQ);

                        // Up! Next Value
                        $item1 = next( $items1 );
                        $item2 = next( $items2 );
                        
                        // Check terminator
                        if($item1 === false && $item2 === false) break;
                
                    }
                
                    }
                    if(isset($_POST['insertar2']))
                    {
                      $items1 = ($_POST['her']);
                       $items2 = ($_POST['can']);
                     
                    ///////////// SEPARAR VALORES DE ARRAYS, EN ESTE CASO SON 4 ARRAYS UNO POR CADA INPUT (ID, NOMBRE, CARRERA Y GRUPO////////////////////)
                    while(true) {

                        //// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
                        $item1 = current($items1);
                        $item2 = current($items2);
                        
                        ////// ASIGNARLOS A VARIABLES ///////////////////
                        $tipo_her=(( $item1 !== false) ? $item1 : ", &nbsp;");
                        $can_her=(( $item2 !== false) ? $item2 : ", &nbsp;");

                        //// CONCATENAR LOS VALORES EN ORDEN PARA SU FUTURA INSERCIÓN ////////
                        $valores='('.$cedu.',"'.$fecha.'","'.$tipo_her.'","'.$can_her.'"),"'.$_SESSION["id"].'"),';

                        //////// YA QUE TERMINA CON COMA CADA FILA, SE RESTA CON LA FUNCIÓN SUBSTR EN LA ULTIMA FILA /////////////////////
                        $valoresQ= substr($valores, 0, -1);
                        
                        ///////// QUERY DE INSERCIÓN ////////////////////////////
                        $resultado=$clase->OutTools($valoresQ);
                        
                        // Up! Next Value
                        $item1 = next( $items1 );
                        $item2 = next( $items2 );
                        
                        // Check terminator
                        if($item1 === false && $item2 === false) break;
                
                    }
                    }
                  ?>
            </div>
            <div class="modal fade" id="mimodal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title text-center">Resumen de Herramientas</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div id="her" class="modal-body">
                    <table class="table text-center small">
                      <tr class="info">
                        <th>fecha ingreso</th>
                        <th>fecha salida</th>
                        <th>tipo herramienta</th>
                        <th>cantidad herramientas</th>
                        </tr>
                      <?php
                      $resultado=$clase->ConsultarTools($_GET['cedula']);
                      while($registroTools = $resultado->fetch_array( MYSQLI_BOTH)){
                      echo '<tr>
                          <td>'.$registroTools['fec_ingreso'].'</td>
                          <td>'.$registroTools['fec_salida'].'</td>
                          <td>'.$registroTools['tipo_her'].'</td>
                          <td>'.$registroTools['can_her'].'</td>
                        </tr>';}
                      ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="espacio" style="margin-bottom: 30px; margin-top: 15px;"></div>
    <footer>
      <div class="fixed-bottom justify bg-dark">
        <h5 class="tb">Todos los derechos reservados &copy. SADIYS (Sistema Automatizado Ingreso y Salida)  Junio-2018</h5>
       </div>
    </footer>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.slim.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
  </body>
</html>           