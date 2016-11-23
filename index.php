
<?php
require_once("Business/EscuelaB.php");
require_once("Business/PersonaB.php");
require_once("Business/DireccionB.php");
require_once("Business/EspecialidadB.php");
  /* 
   session_start();
   require 'conexion.php';

   $idUsuario = $_SESSION['id_usuario'];
   
   $consulta = "SELECT nombre FROM Persona WHERE email = '$idUsuario'";
   $resultado = mysqli_query($link,$consulta);
   
   $row = $resultado->fetch_assoc();
    if(isset($_SESSION ["id_usuario"])){
         $entrada= "Bienvenido " .$row['nombre'];
    }
*/


    
?>


<!DOCTYPE html>
<html>
   <head>
      <title>SportNet</title>
      <meta charset="utf-8">
      <meta name="description" content="Directorio de Escuelas Deportivas" />
      <meta name="author" content="Grupo 7" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700" rel="stylesheet" />
      <link href="Presentacion/img/favicon.png" type="image/x-icon" rel="shortcut icon" />
      <link href="Presentacion/css/screen.css" rel="stylesheet" />
   </head>
   <body class="home" id="page">
      <!-- Header -->
      <header class="main-header">
         <div class="container">
            <div class="header-content">
               <a href="index.php">
                  <img src="" alt="" />
               </a>

               <nav class="site-nav">
                  <ul class="clean-list site-links">
                     <li style="color: #000000">
                        <a href="index.php">Inicio</a>
                     </li>
                     <li style="color: #000000">
                        <a href="#">Escuelas</a>
                     </li>
                     <li style="color: #000000">
                        <a href="#">Añade Tu Escuela</a>
                     </li>
                  </ul>

                  <a style="color: #000000" href="Presentacion/login.php" class="btn btn-outlined"><?php echo isset($entrada) ? utf8_decode($entrada): 'Ingresar / Registarse' ; ?></a>
               </nav>
            </div>
         </div>
      </header>

      <!-- Main Content -->
      <div class="content-box">
         <!-- Hero Section -->
         <section class="section section-hero">

         <div class="parallax-box">
            <div class="container">
               <div class="text align-center">
                  <h1 style="color:#e7434e" >BUSCAS UNA ESCUELA</h1>
                  <p style="color:#e7434e">CERCA DE TU HOGAR?</p>

                  <a href="Presentacion/mapa.php" class="btn btn-special no-icon size-2x">BUSCAR</a>
               </div>
            </div>
         </div>
            

            <!-- Statistics Box -->
            <div class="container">
               <div class="statistics-box">
                  <div class="statistics-item">
                     <span class="value">
                     <?php 
                        $EspecialidadB = new EspecialidadB();
                        echo $EspecialidadB->totalEspecialidad();
                     ?> 
                     </span>
                     <p class="title">Disciplinas</p>
                  </div>

                  <div class="statistics-item">
                     <span class="value">
                     <?php 
                        $EscuelaB = new EscuelaB();
                        echo $EscuelaB->totalEscuelas();
                     ?>
                        
                     </span>
                     <p class="title">Escuelas</p>
                  </div>

                  <div class="statistics-item">
                     <span class="value">
                        <?php 
                           $PersonaB = new PersonaB();
                           echo $PersonaB->totalPersonas();
                        ?>
                     </span>
                     <p class="title">Alumnos</p>
                  </div>

                  <div class="statistics-item">
                     <span class="value">Tu</span>
                     <p class="title">Faltas Solamente</p>
                  </div>
               </div>
            </div>
         </section>



         <!-- Patrocinadas -->
         <section class="section section-boats">
            <!-- Title -->
            <div class="section-title">
               <div class="container">
                  <h2 class="title">Escuelas Destacadas</h2>
                  <p class="sub-title">ESTAS SON LAS ESCUELAS MAS DESTACADAS DE SANTIAGO</p>
               </div>
            </div>

            <!-- Content -->
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-xs-24">
                     <div class="boat-box">
                        <div class="box-cover">
                           <img src="Presentacion/img/escuelas/ucatolica.jpg" alt="destination image" />
                        </div>

                        <span class="boat-price">$35.000 Cuota Inscripcion</span>

                        <div class="box-details">
                           <div class="box-meta">
                              <h4 class="boat-name">Escuela UC</h4>
                              <ul class="clean-list boat-meta">
                                 <li class="location">Las Condes</li>
                                 <li class="berths">300 Alumnos</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-sm-12 col-xs-24">
                     <div class="boat-box">
                        <div class="box-cover">
                           <img src="Presentacion/img/escuelas/escuelacolo.jpg" alt="destination image" />
                        </div>

                        <span class="boat-price">$25.000 Cuota Inscripcion</span>

                        <div class="box-details">
                           <div class="box-meta">
                              <h4 class="boat-name">Escuela Colo-Colo</h4>
                              <ul class="clean-list boat-meta">
                                 <li class="location">Portofino, Itali</li>
                                 <li class="berths">12 Berths</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-sm-12 col-xs-24">
                     <div class="boat-box">
                        <div class="box-cover">
                           <img src="Presentacion/img/escuelas/uchile.jpg" alt="destination image" />
                        </div>

                        <span class="boat-price">$30.000 Cuota Inscripcion</span>

                        <div class="box-details">
                           <div class="box-meta">
                              <h4 class="boat-name">Escuela UChile</h4>
                              <ul class="clean-list boat-meta">
                                 <li class="location">La Cisterna</li>
                                 <li class="berths">120 Alumnos</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-sm-12 col-xs-24">
                     <div class="boat-box">
                        <div class="box-cover">
                           <img src="Presentacion/img/escuelas/fevochi.jpg" alt="destination image" />
                        </div>

                        <span class="boat-price">$30.000 Cuota Inscripcion</span>

                        <div class="box-details">
                           <div class="box-meta">
                              <h4 class="boat-name">Fevochi</h4>
                              <ul class="clean-list boat-meta">
                                 <li class="location">Ñuñoa</li>
                                 <li class="berths">78 Alumnos</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="load-boats-box">
                     <div class="col-sm-12 col-xs-24">
                        <div class="boat-box">
                           <div class="box-cover">
                              <img src="Presentacion/img/boat-2.jpg" alt="destination image" />
                           </div>

                           <span class="boat-price">€950 / day</span>

                           <div class="box-details">
                              <div class="box-meta">
                                 <h4 class="boat-name">Sense 55</h4>
                                 <ul class="clean-list boat-meta">
                                    <li class="location">Portofino, Itali</li>
                                    <li class="berths">12 Berths</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-sm-12 col-xs-24">
                        <div class="boat-box">
                           <div class="box-cover">
                              <img src="Presentacion/img/boat-1.jpg" alt="destination image" />
                           </div>

                           <span class="boat-price">€580 / day</span>

                           <div class="box-details">
                              <div class="box-meta">
                                 <h4 class="boat-name">Delphia 47</h4>
                                 <ul class="clean-list boat-meta">
                                    <li class="location">Gdansk, Poland</li>
                                    <li class="berths">8 Berths</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="align-center">
                  <a href="#" class="btn btn-default btn-load-boats"><span class="text">BUSCAR ESCUELAS POR PRECIO</span><i class="icon-spinner6"></i></a>
               </div>
            </div>
         </section>
      </div>

         <!-- Parallax Box -->
         <div class="hero-box">
               <div class="container">
                  <div class="hero-text align-center">
                     <h1>BUSCA TU ESCUELA</h1>
                     <p>NOSOTROS TE AYUDAMOS A ENCONTRARLA</p>
                  </div>

                  <form class="destinations-form">
                     <div class="input-line">
                        <input type="text" name="destination" value="" class="form-input check-value" placeholder="INGRESA TU COMUNA" />
                        <button type="button" name="destination-submit" class="form-submit btn btn-special">Buscar Escuela</button>
                     </div>
                  </form>
               </div>
            </div>

         <!-- Ultimas Escuelas -->
         <section class="section section-destination">
            <!-- Title -->
            <div class="section-title">
               <div class="container">
                  <h2 class="title">Explora las ultimas escuelas añadidas</h2>
                  <p class="sub-title">LAS SIGUIENTES ESCUELAS SON ULTIMAS AÑADIDAS AL DIRECTORIO</p>
               </div>
            </div>

            <!-- Content -->
            <div class="container">
               <div class="row">
                  <div class="col-md-16 col-xs-24">
                     <div class="destination-box">
                        <div class="box-cover">
                           <a href="#">
                              <img src="Presentacion/img/escuelas/natacionprovi.jpg" alt="destination image" />
                           </a>
                        </div>

                        <span class="boats-qty">230 Alumnos</span>

                        <div class="box-details">
                           <div class="box-meta">
                              <h4 class="city">Club Providencia</h4>
                              <p class="country">Natacion - Providencia</p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-8 col-sm-12 col-xs-24">
                     <div class="destination-box">
                        <div class="box-cover">
                           <a href="#">
                              <img src="Presentacion/img/escuelas/union.JPG" alt="destination image" />
                           </a>
                        </div>

                        <span class="boats-qty">121 Alumnos</span>

                        <div class="box-details">
                           <div class="box-meta">
                              <h4 class="city">Union Española</h4>
                              <p class="country">Futbol Niños - Las Condes</p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-8 col-sm-12 col-xs-24">
                     <div class="destination-box">
                        <div class="box-cover">
                           <a href="#">
                              <img src="Presentacion/img/escuelas/hockeyfrances.jpg" alt="destination image" />
                           </a>
                        </div>

                        <span class="boats-qty">77 Alumnos</span>

                        <div class="box-details">
                           <div class="box-meta">
                              <h4 class="city">Hockey</h4>
                              <p class="country">Estadio Frances</p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-8 col-sm-12 col-xs-24">
                     <div class="destination-box">
                        <div class="box-cover">
                           <a href="#">
                              <img src="Presentacion/img/escuelas/escuelaaudax.jpg" alt="destination image" />
                           </a>
                        </div>

                        <span class="boats-qty">311 Alumnos</span>

                        <div class="box-details">
                           <div class="box-meta">
                              <h4 class="city">Escuela Audax Italiano</h4>
                              <p class="country">La Florida</p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-8 col-sm-12 col-xs-24">
                     <div class="destination-box">
                        <div class="box-cover">
                           <a href="#">
                              <img src="Presentacion/img/escuelas/altenis.jpg" alt="destination image" />
                           </a>
                        </div>

                        <span class="boats-qty">35 Alumnos</span>

                        <div class="box-details">
                           <div class="box-meta">
                              <h4 class="city">Altenis</h4>
                              <p class="country">Escuela Tenis - Las Condes</p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="load-destinations-box">
                     <div class="col-md-8 col-sm-12 col-xs-24">
                        <div class="destination-box">
                           <div class="box-cover">
                              <a href="#">
                                 <img src="Presentacion/img/destination-4.jpg" alt="destination image" />
                              </a>
                           </div>

                           <span class="boats-qty">495</span>

                           <div class="box-details">
                              <div class="box-meta">
                                 <h4 class="city">Portofino</h4>
                                 <p class="country">Italy</p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-md-8 col-sm-12 col-xs-24">
                        <div class="destination-box">
                           <div class="box-cover">
                              <a href="#">
                                 <img src="Presentacion/img/destination-5.jpg" alt="destination image" />
                              </a>
                           </div>

                           <span class="boats-qty">402</span>

                           <div class="box-details">
                              <div class="box-meta">
                                 <h4 class="city">Port Hercules</h4>
                                 <p class="country">Monaco</p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-md-8 col-sm-12 col-xs-24">
                        <div class="destination-box">
                           <div class="box-cover">
                              <a href="#">
                                 <img src="Presentacion/img/destination-3.jpg" alt="destination image" />
                              </a>
                           </div>

                           <span class="boats-qty">543</span>

                           <div class="box-details">
                              <div class="box-meta">
                                 <h4 class="city">Palma de Mallorca</h4>
                                 <p class="country">Spain</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="align-center">
                  <a href="#" class="btn btn-default btn-load-destination"><span class="text">Explorar Mas Escuelas</span><i class="icon-spinner6"></i></a>
               </div>
            </div>
         </section>

      <!-- Footer -->
      <footer class="main-footer">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="widget widget_links">
                     <h5 class="widget-title">Top Escuelas</h5>
                     <ul>
                        <li><a href="#">Club Providencia</a></li>
                        <li><a href="#">Club Oriente</a></li>
                        <li><a href="#">Centro Ivan Zamorano</a></li>
                        <li><a href="#">YMCA - Santiagor</a></li>
                        <li><a href="#">Huachimingo Sport</a></li>
                     </ul>
                  </div>
               </div>

               <div class="col-md-5">
                  <div class="widget widget_links">
                     <h5 class="widget-title">Escuelas Economicas</h5>
                     <ul>
                        <li><a href="#">Rigoberto Sport</a></li>
                        <li><a href="#">Rigoberto Sport</a></li>
                        <li><a href="#">Rigoberto Sport</a></li>
                        <li><a href="#">Rigoberto Sport</a></li>
                        <li><a href="#">Rigoberto Sport</a></li>
                     </ul>
                  </div>
               </div>

               <div class="col-md-9">
                  <div class="widget widget_social">
                     <h5 class="widget-title">Recibe Ofertas en tu Correo</h5>
                     <form class="subscribe-form">
                        <div class="input-line">
                           <input type="text" name="subscribe-email" value="" placeholder="Ingresa tu Correo" />
                        </div>
                        <button type="button" name="subscribe-submit" class="btn btn-special no-icon">Suscribirme</button>
                     </form>

                     <ul class="clean-list social-block">
                        <li>
                           <a href="#"><i class="icon-facebook"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="icon-twitter"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="icon-google-plus"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>

               <div class="col-md-5">
                  <div class="widget widget_links">
                     <h5 class="widget-title">Contactanos</h5>
                     <ul>
                        <li><a href="#">Contactar Aqui</a></li>
                        <li><a href="#">Contactar Aqui</a></li>
                        <li><a href="#">Contactar Aqui</a></li>
                        <li><a href="#">Contactar Aqui</a></li>
                        <li><a href="#">Contactar Aqui</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <!-- Scripts -->
      <script src="Presentacion/js/jquery.js"></script>
      <script src="Presentacion/js/functions.js"></script>
   </body>
</html>
