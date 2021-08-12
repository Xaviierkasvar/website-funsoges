<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>FUNSOGES</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="Vista/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="Vista/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="Vista/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="Vista/Img/logo.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="Vista/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="Vista/Img/logocomp.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li>
                                 <a href="index.php">Inicio</a>
                              </li>
                              <li class="active">
                                 <a href="index.php#Acerca">Acerca</a>
                              </li>
                              <li>
                                 <a href="index.php#Donaciones">Donaciones</a>
                              </li>
                              <li>
                                 <a href="index.php#Redes">Resdes Sociales</a>
                              </li>
                              <li>
                                 <a href="index.php#Contactanos">Contactanos</a>
                              </li>
                              <li>
                                 <a data-toggle="modal" data-target="#sesion" href="#">Acceso</a>
                              </li>
                              <li>
                                 <a href="#"><img src="Vista/images/search_icon.png" alt="#" /></a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
     
      <!-- section -->
      <!-- Modal -->
         <div class="modal fade" id="sesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" style="color: black;" id="exampleModalLabel">Iniciar Sesión</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
                 <div class="row">
                   <?php include "Vista/Login.php"?>
                 </div>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
             </div>
           </div>
         </div>
      <!-- end Modal -->
      <div class="About-bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="aboutheading">
                     <h3>acerca de <span class="orange_color">nosotros</span></h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <img src="Vista/Img/Carrousel/img614.jpg" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>NUESTROS PROYECTOS</h4>
                     <h5>ENE 03 2021</h5>
                     <p>FUNSOGES nace para el año 2010 del corazón de Dios, cuando la Iglesia Evangélica Gesarey se interesa por trabajar en las diferentes necesidades de los sectores rurales y urbanos más vulnerables de nuestra sociedad como lo son la problemática de la drogadicción, la prostitución, alcoholismo, embarazos a temprana edad en jóvenes y preadolescentes, la desnutrición y abandono por la violencia y crisis económica, rechazo familiar y social en la primera infancia y adulto mayor.</p>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="Vista/Img/img568.jpg" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Misión</h4>
                     <h5>ENE 03 2021</h5>
                     <p>Trabajar en la Asesoría, gestión, ejecución, y manejo de proyectos comunitarios obteniendo así el bienestar común general de la población La Fundación Social Gesarey es una entidad sin ánimo de lucro “cristiana” que trabaja por el desarrollo y sueños hacia el futuro en la primera infancia, grupos juvenil, madres cabezas de hogar y adulto mayor quienes por sus condiciones de vulnerabilidad necesitan apoyo y cuidados permanentes para lograr aumentar su amor y seguridad en la familia y en la sociedad tomados de la mano de nuestro señor Jesucristo.</p>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-6" style="margin-top: 50px;">
                  <img src="Vista/Img/img271.jpg" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Visión</h4>
                     <h5>ENE 03 2021</h5>
                     <p>Para el año 2.026 ser una Fundación Social Gesarey reconocida a nivel nacional, con sedes en cada ciudad del País y Barrio de escasos recursos del mismo, brindando bienestar común a través de proyectos comunitarios
                     Funsoges será una institución reconocida en el ámbito nacional e internacional como fundación especializada en la atención de Primera infancia, Grupos Juveniles y Adulto mayor mediante la excelencia y compromiso en el servicio y bienestar espiritual, económico y social de nuestra sociedad.</p>
                  </div>
               </div>
            </div>
            <div class="About-bg">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="aboutheading">
                           <h3><span class="orange_color">OBJETIVOS</span></h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-6">
                  <ul class="list-group">
                      <li class="list-group-item"><p>&#10148; Bajar los niveles de desnutrición en los niños y ancianos de los sectores más vulnerables.</p></li>
                      <li class="list-group-item"><p>&#10148; Planear y realizar actividades recreativas y lúdicas acordes para el desarrollo y bienestar de los niños, jóvenes y adultos mayor.</p></li>
                      <li class="list-group-item"><p>&#10148; Trabajar para desarrollar una niñez y juventud llena del temor de Dios con valores y principios que brinden una mejor convivencia en las familias y en la sociedad.</p></li>
                      <li class="list-group-item"><p>&#10148; Mejorar la calidad de vida de nuestros Jóvenes y Padres de Familia.</p></li>
                      <li class="list-group-item"><p>&#10148; Capacitar a la juventud y miembros de la familia mediante cursos y talleres que brinden una oportunidad de empleo y mejorar sus condiciones económicas.</p></li>
                      <li class="list-group-item"><p>&#10148; Fomentar una conciencia para el esfuerzo y el trabajo.</p></li>
                      
                  </ul>          
               </div>
               <div class="col-md-6">
                  <ul   >
                      <li class="list-group-item"><p>&#10148; Promover el trabajo comunitario y participación social.</p></li>
                      <li class="list-group-item"><p>&#10148; Formar hábitos de alimentación, higiene personal, aseo y orden que inculquen conciencia sobre el valor y necesidad de la salud.</p></li>
                      <li class="list-group-item"><p>&#10148; Brindar atención y orientación en el área de psicología, trabajo social y nutrición.</p></li>
                      <li class="list-group-item"><p>&#10148; Realizar actividades de salud para mantener y generar un estado físico adecuado de nuestros niños y adulto mayor.</p></li>
                      <li class="list-group-item"><p>&#10148; Gestionar subsidios de viviendas para la población vulnerable</p></li>
                      <li class="list-group-item"><p>&#10148; Capacitar la población en formación técnica laboral y profesional para una mejor calidad de vida de ellos</p></li>
                      <li class="list-group-item" style="text-align: center;"><p>Todos estos objetivos se logran atreves de los diferentes programas y servicios que ofrece la Fundación</p></li>
                  </ul>
               </div>
            </div>
      <!-- end section -->
      <!-- section -->
         <div class="row margin_top_30">
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Planta Física:</h4>
                     <h5>MAY 14 2019 5 READ</h5>
                     <p>Funsoges tiene sala de comedores para la primera infancia y Adulto Mayor, aulas, habitaciones y zona de atención Administrativa. Actualmente trabaja con total en promedio de:</p>
                     <table class="table text-center">
                       <thead>
                         <tr>
                           <th scope="col">POBLACIÓN</th>
                           <th scope="col">CANTIDAD</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <td>Niños y niñas</td>
                           <td>500</td>
                         </tr>
                         <tr>
                           <td>Jóvenes y Preadolescentes</td>
                           <td>500</td>
                         </tr>
                         <tr>
                           <td>Adulto Mayor</td>
                           <td>300</td>
                         </tr>
                         <tr>
                           <td>Madres cabezas de familias</td>
                           <td>4000</td>
                         </tr>
                       </tbody>
                     </table>
                     <h4>Donantes y Benefactores:</h4>
                        <p>Algunas Personas naturales y empresas privadas que se han comprometido con nuestra labor haciendo aportes de dinero y/o en especie de manera ocasional..</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>PROFESIONALES</h4>
                     <h5>La fundación Gesarey en desarrollo de sus objetivos trabaja con el siguiente equipo humano:</h5>
                     <h4>Asamblea General y Junta Directiva:</h4>
                        <p>Compuesta por los Socio fundadores, voluntarios y miembros de la iglesia evangélica Gesarey comprometidos con la problemática social de nuestra País. Quienes constituyen la autoridad administrativa.</p>
                     <h4>Planta de Personal:</h4>
                        <p>Cuenta con profesionales calificados, interesados en brindar una mejor calidad de vida y atención como: Ministros Pastorales, Personal administrativo y Revisoría Fiscal, Psicología, Pedagógico y en trabajo Social, enfermería y auxiliar de cocina que apoyan de forma voluntaria en esta gran labor.</p>
                     <h4>Voluntarios y Otras Instituciones:</h4>
                        <p>Apoyan y refuerzan las diferentes actividades de la fundación bajo la orientación del personal de planta como lo son: Defensa Civil, Servicio de Aprendizaje Sena, Colegios y otras entidades.</p>
                  </div>
               </div>
            </div>
            <div class="About-bg">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="aboutheading">
                           <h3><span class="orange_color">PROGRAMAS Y ACTIVIDADES</span></h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Comedor “CORAZONES ALEGRES”</h4>
                        <p>Comedor comunitario que se realizan de lunes a viernes donde tenemos en promedio 350 beneficiarios inscritos en nuestra organización y así de esta forma sacamos muchas sonrisas a niños y adultos mayor de escasos recursos que no cuentan con ayuda de ninguna índole y hemos sido esa ayuda para mejorar sus condiciones de vida velando por el bienestar y normal desarrollo emocional que promueven la seguridad alimentaria y baja los altos índices de desnutrición que se presentan en esta región del país.
                        Para esto gestionamos recursos con distintas instituciones privadas y Personas naturales de buen corazón interesadas en los trabajos comunitarios y comprometidos con la labor social en búsqueda de una mejor sociedad por esto se pretende buscar más recursos que permitan beneficiar a todos los niños de la comunidad en la parte de almuerzo y un refrigerio diario.</p>
                     <h4>APADRINAMIENTO DE NIÑOS QUE NO TIENEN FAMILIAS</h4>
                        <p>En estos momentos la fundación trabaja en búsqueda de apadrinamiento de niños que no tienen familias y no cuentan con suficiente apoyo económico y recursos que permitan vivir con condiciones de vida normales y así crear vínculos afectivos, económicos y social que ayuden a satisfacer sus necesidades y brindarles una niñez más agradable llena de oportunidades y la gracia de Dios sobre sus vidas.</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Talleres de Actividades Lúdicas y Recreativas</h4>
                        <p>Debido a la falta de juegos didácticos a los niños en el círculo familiar y escolar desarrollamos actividades deportivas, lúdicas-recreativas para mejorar y optimizar el proceso de aprendizaje en los niños de primera infancia mediante el deporte, la recreación y los juegos didácticos y así fortalecer la sana convivencia entre los miembros de las familias y la comunidad.
                        Para el desarrollo de estas actividades utilizamos distintos herramientas e implementos lúdicos y deportivos como: Papel, cartón, tijeras, marcadores,
                        Colores, pegantes, balones, cuerdas, aros, loterías, dominós entre otros y así lograr:</p>
                        <div class="">
                           <ul>
                              <li><p>&#10148; Incrementar la motivación en los niños</p></li>
                              <li><p>&#10148; Desarrollar habilidades comunicativas</p></li>
                              <li><p>&#10148; Aumentar el vínculo socioafectivo, amor, seguridad, y confianza.</p></li>
                              <li><p>&#10148; Trabajar en el desarrollo psicomotor permitiendo al niño relacionarse, conocer y adaptarse al medio que lo rodea.</p></li>
                              <li><p>&#10148; Desarrollo intelectual y/o cognoscitivo desarrollando la memoria del niño, el reconocimiento e identificación de todas las cosas vistas.</p></li>
                              <li><p>&#10148; Fomentar la educación, valores y principios atreves del deporte.</p></li> 
                           </ul>
                        </div>
                        <div class="">
                           <ul>
                               
                           </ul>
                        </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Cursos de Danza, Teatro y Canto</h4>
                        <p>En estos cursos se busca mantener un buen estado de salud en los jóvenes y en otros casos adultos mayor generando un cambio en su salud y vida y creando en ellos una conciencia en el cuidado de su salud y aspecto personal, cambiando la rutina diaria con trabajos de ejercicios de entrenamiento y participación en las danzas.
                        Se busca desarrollar personas capaces de interactuar y compartir agradablemente con la sociedad y así disminuir el alto grado de intolerancia y falta de comunicación que abunda hoy en las familias y en la sociedad colombiana. Este proyecto tiene un alto grado de participación juvenil y ha permitido a muchos jóvenes alejarse y salir de la problemática de la drogadicción, la prostitución, alcoholismo, vandalismo y embarazos a temprana edad en esta población.</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Talleres de Capacitación y formación laboral para Jóvenes</h4>
                        <p>Estos talleres buscan disminuir el desempleo en los sectores más vulnerables de Barranquilla mediante la participación de cursos y talleres de formación y capacitación en diversas ramas y ámbitos laborales para generar oportunidades de acceder al mercado laboral a muchos jóvenes y adultos de esta región.
                        Para esto trabajamos cursos y talleres como:</p>
                        <ul>
                              <li><p>&#10148; Taller de diseño, costura y maquinas planas.<Yp></li>
                              <li><p>&#10148; Elaboración de productos de aseo como desinfectantes para pisos.<Yp></li>
                              <li><p>&#10148; Distintos cursos abiertos del Sena.<Yp></li>
                              <li><p>&#10148; Validación de bachillerato.<Yp></li>
                           </ul>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="full blog_cont">
                     <h4 class="text-center">COMO NOS SOSTENEMOS</h4>
                           <h5 class="text-center">Brindando nuestros servicios:</h5>
                           <div class="col-md-6 full blog_cont">
                              <p><b>1. LOGISTICA:</b> contamos con personal capacitado para brindar la ejecución, planificación y control de todas las actividades relacionadas con la organización que desea nuestros servicios, aportando ideas y conocimiento para la extensión de ella.<br>
                           <b>2. CAPACITACIONES:</b> preparamos con dedicación y conocimientos actualizados para el desarrollo humano y salud metal, formando equipos sostenidos con buenas conductos y desempeño laboral para enriquecimiento de la empresa.<br>
                           <b>3. CONFECCIONES:</b> tenemos mujeres madres cabezas de hogar en el área de confecciones con alto control de calidad.<br> buscamos empresas que apoyen estos emprendimientos para un crecimiento económico para los mas vulnerables y sostenibilidad de esta organización, con personal totalmente capacitado, maquinaria adecuada para la manufactura para todo tipo de producto.<br>
                           &#10148; Tapa bocas<br>
                           &#10148; Uniformes para todo tipo de fabrica</p>
                           </div>
                           <div class="col-md-6 full blog_cont"> 
                              <p><b>4. PUBLICIDAD:</b> en esta área contamos con todos los equipos ya que somos fabricantes con el propósito de brindar calidad de servicio a las organizaciones.<br>
                              Nuestros productos:<br>
                           &#10148; Pendones<br>
                           &#10148; Tarjetas de presentación (por millares)<br>
                           &#10148; Flayers<br>
                           &#10148; Adhesivos para ventanas, puertas etc.<br>
                           &#10148; Avisos luminosos<br>
                           &#10148; Avisos luminosos<br>
                           &#10148; Talonarios de cuentas de cobra<br>
                           &#10148; Brochures<br>
                           &#10148; Carpetas personalizadas<br>
                           Somos fabricantes de calidad de todos los productos de aseo como:<br>
                           &#10148; Desinfectantes<br>
                           &#10148; ELBG Limpiador<br>
                           &#10148; Jabón liquido<br>
                           &#10148; Clorox etc.</p>
                           </div>
                     
                        
                  </div>
               </div>
            </div>
         </div>
      <!-- end section -->
      <!-- footer -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <a href="#"><img src="Vista/Img/logo_footer_1.png" alt="#" /></a>
                  <ul class="contact_information">
                     <li><span><img src="Vista/images/location_icon.png" alt="#" /></span><span class="text_cont">Calle 46 e # 13 sur 04 Los Girasoles<br>Barranquilla-Colombia</span></li>
                     <li><span><img src="Vista/images/phone_icon.png" alt="#" /></span><span class="text_cont">324-8561<br>300-870-0118<br>300-850-5134</span></li>
                     <li><span><img src="Vista/images/mail_icon.png" alt="#" /></span><span class="text_cont">funsoges2018@gmail.com<br>funsoges_2007@live.com</span></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6">
                  <div class="footer_links">
                     <h3>Enlace rápido</h3>
                     <ul class="social_icon">
                     <li><a href="https://www.facebook.com/Fundaci%C3%B3n-Social-Gesarey-2334471413274742/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="funsoges2018@gmail.com"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="footer_links">
                     <h3>Instagram</h3>
                     <ol>
                        <li><img class="img-responsive" src="Vista/Img/footer/1.jpg" alt="#" /></li>
                        <li><img class="img-responsive" src="Vista/Img/footer/2.jpg" alt="#" /></li>
                        <li><img class="img-responsive" src="Vista/Img/footer/3.jpg" alt="#" /></li>
                        <li><img class="img-responsive" src="Vista/Img/footer/4.jpg" alt="#" /></li>
                     </ol>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="footer_links">
                     <h3>Contáctenos</h3>
                     <form action="index.php">
                        <fieldset>
                           <div class="field">
                              <input type="text" name="name" placeholder="Tu nombre" required="" />
                           </div>
                           <div class="field">
                              <input type="email" name="email" placeholder="Correo electronico" required="" />
                           </div>
                           <div class="field">
                              <input type="text" name="subject" placeholder="Tema" required="" />
                           </div>
                           <div class="field">
                              <textarea placeholder="Mensaje"></textarea>
                           </div>
                           <div class="field">
                              <div class="center">
                                 <button class="reply_bt">Enviar</button>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="cpy">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>Copyright © 2021 Diseño de <a href="mailto:javier_castillo_15@hotmail.es">Francisco Javier Castillo Barrios</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="Vista/js/jquery.min.js"></script>
      <script src="Vista/js/popper.min.js"></script>
      <script src="Vista/js/bootstrap.bundle.min.js"></script>
      <script src="Vista/js/jquery-3.0.0.min.js"></script>
      <script src="Vista/js/plugin.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="Vista/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="Vista/js/custom.js"></script>
   </body>
</html>