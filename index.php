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
         <div class="loader"><img src="Vista/images/loading.gif" alt="" /></div>
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
                        <div class="logo"> <a href="index.php"><img src="Vista/Img/logocomp.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active">
                                 <a href="index.php">Inicio</a>
                              </li>
                              <li>
                                 <a href="#Acerca">Acerca</a>
                              </li>
                              <li>
                                 <a href="#Donaciones">Donaciones</a>
                              </li>
                              <li>
                                 <a href="#Redes">Resdes Sociales</a>
                              </li>
                              <li>
                                 <a href="#Contactanos">Contactanos</a>
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
      <!-- revolution slider -->
      <div class="banner-slider">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-7">
                  <div id="slider_main" class="carousel slide" data-ride="carousel">
                     <!-- The slideshow -->
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="Vista/Img/Carrousel/img614.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/1.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/2.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img521.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img520.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img439.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img438.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img419.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img418.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img407.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img406.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img384.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img383.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img375.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img374.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img357.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img333.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img332.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img313.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img312.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img299.jpg" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="Vista/Img/Carrousel/img298.jpg" alt="#" />
                        </div>
                     </div>
                     <!-- Left and right controls -->
                     <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     </a>
                     <a class="carousel-control-next" href="#slider_main" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="full slider_cont_section">
                     <h4>Lo mas destacado en</h4>
                     <h4><FONT class="orange_color">Fundación GESAREY</FONT></h4>
                     <p style="text-align: justify;">FUNSOGES nace para el año 2010 del corazón de Dios, cuando la Iglesia Evangélica Gesarey se interesa por trabajar en las diferentes necesidades de los sectores rurales y urbanos más vulnerables de nuestra sociedad como lo son la problemática de la drogadicción, la prostitución, alcoholismo, embarazos a temprana edad en jóvenes y preadolescentes, la desnutrición y abandono por la violencia y crisis económica, rechazo familiar y social en la primera infancia y adulto mayor.</p>
                     <div class="button_section">
                        <a href="acerca.php">Leer mas</a>
                        <a href="#Contactanos">Contáctenos</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end revolution slider -->
      <!-- section -->
      <section id="Acerca">
            <div class="section layout_padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                     <div class="heading">
                        <h3>Acerca de</h3>
                     </div>
                  </div>
                  <div class="col-md-9">
                     <div class="heading">
                        <h3 class="orange_color">Nosotros</h3>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <img src="Vista/Img/img568.jpg" alt="#" />
                  </div>
                  <div class="col-md-6">
                     <div class="full blog_cont">
                        <h4>Misión</h4>
                        <h5>ENE 03 2021</h5>
                        <p style="text-align: justify;">Trabajar en la Asesoría, gestión, ejecución, y manejo de proyectos comunitarios obteniendo así el bienestar común general de l a población La Fundación Social Gesarey es una entidad sin ánimo de lucro “cristiana” que trabaja por el desarrollo y sueños hacia el futuro en la primera infancia, grupos juvenil, madres cabezas de hogar y adulto mayor quienes por sus condiciones de vulnerabilidad necesitan apoyo y cuidados permanentes para lograr aumentar su amor y seguridad en la familia y en la sociedad tomados de la mano de nuestro señor Jesucristo.</p>
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
                        <p style="text-align: justify;">Para el año 2.026 ser una Fundación Social Gesarey reconocida a nivel nacional, con sedes en cada ciudad del País y Barrio de escasos recursos del mismo, brindando bienestar común a través de proyectos comunitarios
                        Funsoges será una institución reconocida en el ámbito nacional e internacional como fundación especializada en la atención de Primera infancia, Grupos Juveniles y Adulto mayor mediante la excelencia y compromiso en el servicio y bienestar espiritual, económico y social de nuestra sociedad.</p>
                     </div>
                  </div>
               </div>
               <div class="row margin_top_30">
                  <div class="col-md-12">
                     <div class="button_section full center margin_top_30">
                        <a style="margin:0;" href="acerca.php">Leer mas</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- section -->
      <section id="Donaciones">
         <div class="section layout_padding dark_bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="heading">
                        <h3>Donaciones</h3>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="donation_card">
                        <div class="donation_content">
                           <h3 class="white_font">"Si ayudo a una persona a tener esperanza, no habré vivido en vano."</h3>
                           <h5 class="grey_font" style="color: green">Martin Luther King</h5>
                           <p class="white_font">Tu aporte hace posible nuestros proyectos comunitarios para la primera infancia, grupos juveniles, madres cabeza de hogar y adultos mayores.</p>
                           <div class="donation_methods">
                              <div class="donation_method active" data-method="qr">Donar con QR</div>
                              <div class="donation_method" data-method="online">Donar Online</div>
                              <div class="donation_method" data-method="info">Información Bancaria</div>
                           </div>
                           
                           <div class="donation_details" id="qr_donation">
                              <div class="qr_container">
                                 <img src="Vista/images/247d7036.jpg" alt="Código QR para donaciones" class="qr_code" />
                                 <p class="white_font">Escanea este código QR para hacer tu donación directamente desde tu app bancaria</p>
                              </div>
                           </div>
                           
                           <div class="donation_details" id="online_donation" style="display:none;">
                              <div class="button_section full center margin_top_30">
                                 <a style="margin:0; border-radius: 30px;" href="https://biz.payulatam.com/B0e6eb7EBAAD6A5" target="_blank">DONAR AHORA</a>
                              </div>
                           </div>
                           
                           <div class="donation_details" id="bank_info" style="display:none;">
                              <div class="bank_info">
                                 <p class="white_font"><strong>Cuenta Bancaria:</strong> FUNSOGES</p>
                                 <p class="white_font"><strong>Banco:</strong> Bancolombia</p>
                                 <p class="white_font"><strong>Tipo de cuenta:</strong> Ahorros</p>
                                 <p class="white_font"><strong>Número:</strong> 123-456789-00</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  <div class="col-md-6">
                     <div class="donation_impact">
                        <img src="Vista/Img/Donaciones.jpg" alt="Impacto de donaciones" class="img-fluid rounded" />
                        <div class="impact_numbers">
                           <div class="impact_item">
                              <h4>100+</h4>
                              <p>Niños Beneficiados</p>
                           </div>
                           <div class="impact_item">
                              <h4>50+</h4>
                              <p>Familias Apoyadas</p>
                           </div>
                           <div class="impact_item">
                              <h4>20+</h4>
                              <p>Proyectos Activos</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- section -->
      <section class="layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                     <h4 style="border-bottom: solid #333 1px;">Comentarios / 2</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_blog_line">
                     <div class="row">
                        <div class="col-md-1">
                           <img src="Vista/images/c_1.jpg" alt="#" />
                        </div>
                        <div class="col-md-9">
                           <div class="full contact_text">
                              <h3>mabispalomino7</h3>
                              <h4>Publicado el 05 de enero de 2021 a las 06:53 am</h4>
                              <p>Continuamos con este gran proyecto que sea el señor guiandonos por el camino correcto, apartando piedras de tropiezo y bendiciendo las vidas de todos nuestros amados hermanos en cristo.</p>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <a class="reply_bt" href="#">Responder</a>
                        </div>
                     </div>
                  </div>
                  <div class="full comment_blog_line">
                     <div class="row">
                        <div class="col-md-1">
                           <img src="Vista/images/c_2.jpg" alt="#" />
                        </div>
                        <div class="col-md-9">
                           <div class="full contact_text">
                              <h3>serranoballestas</h3>
                              <h4>Publicado el 10 de enero de 2021 a las 10:36 am</h4>
                              <p>Saludos desde la fria bogota, los echamos mucho de menos les deseamos lo mejor y que este nuevo año sea de grandes bendiciones para sus vidas.</p>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <a class="reply_bt" href="#">Responder</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12 margin_top_30">
                  <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                     <h4>Publicar : Tu comentario</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
                     <form action="index.php">
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Nombre" required="#" />
                                    <input type="email" name="email" placeholder="Coreo electronico" required="#" />
                                 </div>
                                 <div class="col-md-6">
                                    <textarea placeholder="Comentario"></textarea>
                                 </div>
                              </div>
                              <div class="row margin_top_30">
                                 <div class="col-md-12">
                                    <div class="center">
                                       <button>Enviar</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- section --> 
      <section id="Redes">
         <div class="section layout_padding blog_blue_bg light_silver">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="heading">
                        <h3>Redes Social</h3>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="full">
                        <div class="big_blog">
                           <div id="fb-root"></div>
                           <div class="fb-page mt-4"
                                 data-href="https://www.facebook.com/profile.php?id=100064621932359"
                                 data-tabs="timeline"
                                 data-width="390"
                                 data-height="470"
                                 data-small-header="true"
                                 data-adapt-container-width="true"
                                 data-hide-cover="true"
                                 data-show-facepile="true">
                              <blockquote cite="https://www.facebook.com/profile.php?id=100064621932359" class="fb-xfbml-parse-ignore">
                                 <a href="https://www.facebook.com/profile.php?id=100064621932359">Página de Facebook</a>
                              </blockquote>
                           </div>
                           <div class="float-right">
                              <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                              <div class="elfsight-app-20a8ed11-f18d-409f-932e-21994596d8d7"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- footer -->
      <footer id="Contactanos">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <a href="#"><img src="Vista/Img/logo_footer_1.png" alt="#" /></a>
                  <ul class="contact_information">
                     <li><span><img src="Vista/images/location_icon.png" alt="#" /></span><span class="text_cont">Calle 48 e # 8 sur 37 Los Girasoles<br>Barranquilla-Colombia</span></li>
                     <li><span><img src="Vista/images/phone_icon.png" alt="#" /></span><span class="text_cont">304-237-2690<br>316-989-1309</span></li>
                     <li><span><img src="Vista/images/mail_icon.png" alt="#" /></span><span class="text_cont">funsoges2018@gmail.com<br>funsoges_2007@live.com</span></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6">
                  <div class="footer_links">
                     <h3>Enlace rápido</h3>
                     <ul class="social_icon">
                     <li><a href="https://www.facebook.com/share/1Bh8GtuNoZ/" target="_blank"><i class="fa fa-facebook"></i></a></li>
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
      <div id = "fb-root" > </div> <script async diferir crossorigin = "anonymous" src = "https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v10.0" nonce = "BhAnAilu" > </script>
   </body>
</html>

<style>
   .donation_card {
      background: rgba(0,0,0,0.3);
      border-radius: 15px;
      padding: 30px;
      height: 100%;
   }
   
   .donation_content {
      display: flex;
      flex-direction: column;
      height: 100%;
   }
   
   .donation_methods {
      display: flex;
      margin: 20px 0;
      border-radius: 30px;
      overflow: hidden;
      background: rgba(0,0,0,0.2);
   }
   
   .donation_method {
      flex: 1;
      padding: 12px 8px;
      text-align: center;
      color: white;
      cursor: pointer;
      transition: all 0.3s ease;
   }
   
   .donation_method.active {
      background: #28a745;
      font-weight: bold;
   }
   
   .donation_method:hover:not(.active) {
      background: rgba(255,255,255,0.1);
   }
   
   .donation_details {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px 0;
   }
   
   .qr_container {
      text-align: center;
   }
   
   .qr_code {
      max-width: 180px;
      border: 5px solid white;
      border-radius: 10px;
      padding: 10px;
      background: white;
      margin-bottom: 15px;
      transition: all 0.3s ease;
      cursor: pointer;
      position: relative;
      z-index: 1;
   }
   
   .qr_code:hover {
      transform: scale(2.5);
      box-shadow: 0 0 20px rgba(255,255,255,0.7);
      z-index: 100;
   }
   
   /* Estilos para el botón de cierre en móviles */
   .close_button {
      position: absolute;
      top: -15px;
      right: -15px;
      background: #f44336;
      color: white;
      border-radius: 50%;
      width: 30px;
      height: 30px;
      text-align: center;
      line-height: 30px;
      font-weight: bold;
      cursor: pointer;
      z-index: 102;
      box-shadow: 0 0 10px rgba(0,0,0,0.5);
   }
   
   /* Evitar que el efecto hover cause problemas en dispositivos táctiles */
   @media (hover: none) {
      .qr_code:hover {
         transform: none;
         box-shadow: none;
         z-index: 1;
      }
   }
   
   .bank_info {
      background: rgba(0,0,0,0.2);
      padding: 15px;
      border-radius: 10px;
      width: 100%;
   }
   
   .bank_info p {
      margin-bottom: 8px;
   }
   
   .donation_impact {
      display: flex;
      flex-direction: column;
      height: 100%;
   }
   
   .impact_numbers {
      display: flex;
      justify-content: space-around;
      margin-top: 20px;
      text-align: center;
   }
   
   .impact_item {
      background: rgba(255,255,255,0.9);
      padding: 15px;
      border-radius: 10px;
      min-width: 100px;
   }
   
   .impact_item h4 {
      color: #28a745;
      margin: 0;
      font-weight: bold;
   }
   
   .impact_item p {
      margin: 5px 0 0;
      color: #333;
   }
</style>

<!-- JavaScript para la interactividad de los métodos de donación y el QR -->
<script>
   document.addEventListener('DOMContentLoaded', function() {
      const donationMethods = document.querySelectorAll('.donation_method');
      const donationDetails = document.querySelectorAll('.donation_details');
      
      // Gestionar las pestañas de donación
      donationMethods.forEach(method => {
         method.addEventListener('click', function() {
            // Quitar clase activa de todos los métodos
            donationMethods.forEach(m => m.classList.remove('active'));
            // Agregar clase activa al método seleccionado
            this.classList.add('active');
            
            // Ocultar todos los detalles
            donationDetails.forEach(detail => detail.style.display = 'none');
            
            // Mostrar los detalles correspondientes al método seleccionado
            const methodType = this.getAttribute('data-method');
            
            if (methodType === 'qr') {
               document.getElementById('qr_donation').style.display = 'flex';
            } else if (methodType === 'online') {
               document.getElementById('online_donation').style.display = 'flex';
            } else if (methodType === 'info') {
               document.getElementById('bank_info').style.display = 'flex';
            }
         });
      });
      
      // Gestionar la ampliación del QR
      const qrCode = document.querySelector('.qr_code');
      let overlay = null;
      let closeMsg = null;
      
      if (qrCode) {
         // Variable para controlar el estado
         let isFullscreen = false;
         
         // Función para cerrar el modo pantalla completa
         const closeFullscreen = () => {
            if (!isFullscreen) return;
            
            isFullscreen = false;
            qrCode.classList.remove('fullscreen');
            
            // Restaurar estilos originales
            qrCode.style.position = '';
            qrCode.style.top = '';
            qrCode.style.left = '';
            qrCode.style.transform = '';
            qrCode.style.maxWidth = '';
            qrCode.style.zIndex = '';
            
            // Eliminar el overlay y mensaje si existen
            if (overlay && overlay.parentNode) {
                document.body.removeChild(overlay);
            }
            if (closeMsg && closeMsg.parentNode) {
                document.body.removeChild(closeMsg);
            }
         };
         
         // Manejador de clic para abrir/cerrar el QR
         qrCode.addEventListener('click', function(e) {
            e.stopPropagation(); // Evita que se propague al documento
            
            if (!isFullscreen) {
               // Abrir modo pantalla completa
               isFullscreen = true;
               this.classList.add('fullscreen');
               
               // Crear overlay para fondo oscuro
               overlay = document.createElement('div');
               overlay.classList.add('qr_overlay');
               overlay.style.position = 'fixed';
               overlay.style.top = '0';
               overlay.style.left = '0';
               overlay.style.width = '100%';
               overlay.style.height = '100%';
               overlay.style.backgroundColor = 'rgba(0,0,0,0.8)';
               overlay.style.zIndex = '99';
               document.body.appendChild(overlay);
               
               // Colocar QR por encima del overlay
               this.style.position = 'fixed';
               this.style.top = '50%';
               this.style.left = '50%';
               this.style.transform = 'translate(-50%, -50%) scale(3)';
               this.style.maxWidth = '80%';
               this.style.zIndex = '100';
               
               // Añadir mensaje de cierre
               closeMsg = document.createElement('div');
               closeMsg.textContent = 'Toca en cualquier lugar para cerrar';
               closeMsg.style.position = 'fixed';
               closeMsg.style.bottom = '20%';
               closeMsg.style.left = '50%';
               closeMsg.style.transform = 'translateX(-50%)';
               closeMsg.style.color = 'white';
               closeMsg.style.zIndex = '101';
               closeMsg.style.textAlign = 'center';
               closeMsg.style.width = '90%';
               closeMsg.style.padding = '10px';
               closeMsg.classList.add('close_message');
               document.body.appendChild(closeMsg);
               
               // Agregar manejador al overlay
               overlay.addEventListener('click', closeFullscreen);
               
               // Agregar manejador al documento para asegurar que siempre se pueda cerrar
               document.addEventListener('click', closeFullscreen);
            } else {
               // Cerrar modo pantalla completa
               closeFullscreen();
            }
         });
         
         // Asegurar que se pueda cerrar en dispositivos táctiles
         document.addEventListener('touchstart', function(e) {
            if (isFullscreen) {
               closeFullscreen();
            }
         });
         
         // Agregar botón de cierre explícito para móviles
         qrCode.addEventListener('touchstart', function(e) {
            if (isFullscreen) {
               e.preventDefault(); // Prevenir comportamiento predeterminado del navegador
               closeFullscreen();
            }
         });
      }
   });
</script>