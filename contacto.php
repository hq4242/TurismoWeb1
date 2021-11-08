<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contacto - Turismo Puno</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/logotoursv7.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,300%7CRoboto+Slab:400,700%7CMontserrat:700%7CPacifico">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!--===== Start Loading =====-->
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Cargando...</p>
      </div>
    </div>
    <!--===== End Loading =====-->

    <!--===== Start Pagina Galeria =====-->
    <div class="page text-center">

      <!--===== Start Header =====-->
      <header class="page-head bg-contacto">
        <div class="rd-navbar-wrap bg-transparent">
          <?php 
            include "nav.php";
          ?>
        </div>
        <section class="relative text-center" id="banner">
          <div class="container">
            <div class="jumbotron text-center">
              <br><br>
              <h1 class="animated zoomIn" style="animation-delay: 1s">Contacto</h1>
            </div>
          </div>
        </section>
      </header>
      <!--===== End Header =====-->

      <!--===== Start Contenido =====-->
      <main class="page-content">

        <!--===== Start Miga de Pan =====-->
        <section class="bg-light section-xl">
          <ol class="breadcrumb">
            <li><a href="index">Inicio</a></li>
            <li class="active">Contacto</li>
          </ol>
        </section>
        <!--===== End Miga de Pan =====-->

        <section class="section section-inset-1">
          <div class="container">
            <h4> CONTÁCTENOS</h4>
            <hr>
            <div class="row justify-content-center">
              <div class="col-12 col-lg-8">
                <!-- RD Mailform-->
                <form class="rd-mailform text-left" method="post" action="enviar-prueba.php">
                  <div class="row row-10">
                    <div class="col-12 col-md-6">
                      <div class="form-wrap">
                        <label class="form-label" for="forms-name">Nombres...</label>
                        <input class="form-input" id="forms-name" type="text" name="nombre" data-constraints="@Required">
                      </div>
                    </div>
                    <!---->
                    <div class="col-12 col-md-6">
                      <div class="form-wrap">
                        <label class="form-label" for="forms-phone">Telefono / Celular...</label>
                        <input class="form-input" id="forms-phone" type="text" name="telefono" data-constraints="@PhoneNumber @Required">
                      </div>
                    </div>
                    <!---->
                    <div class="col-12 col-md-6">
                      <div class="form-wrap">
                        <label class="form-label" for="forms-email">E-mail...</label>
                        <input class="form-input" id="forms-email" type="email" name="email" data-constraints="@Email @Required">
                      </div>
                    </div>
                    <!---->
                    
                    <div class="col-12 col-md-6">
                      <div class="form-wrap">
                        <label class="form-label" for="forms-message">Asunto...</label>
                        <input class="form-input" id="forms-message" type="text" name="asunto" data-constraints="@Required">
                      </div>
                    </div>
                    <!---->
                    <div class="col-12 col-md-12">
                      <div class="form-wrap">
                        <label class="form-label" for="forms-message">Mensaje...</label>
                        <textarea class="form-input" id="forms-message" name="mensaje" data-constraints="@Required"></textarea>
                      </div>
                    </div>
                    <div class="col-12 text-center">
                      <button class="btn btn-success btn-sm" type="submit">Enviar Mensaje</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>

                
        <section class="section bg-accent">
          <div class="container">
            <div class="row row-45 text-md-left clearleft-custom">
              <div class="col-12 col-md-6 col-xl-3">
                <address>
                  <div class="media flex-column flex-md-row">
                    <div class="media-left"><span class="icon icon-success icon-sm fa-map-marker"></span></div>
                    <div class="media-body">
                      <p class="h6">Dirección</p><span>
                        Jr. Deustua 458, Puno 21001</span>
                    </div>
                  </div>
                </address>
              </div>
              <div class="col-12 col-md-6 col-xl-3">
                <address>
                  <div class="media flex-column flex-md-row">
                    <div class="media-left"><span class="icon icon-success icon-sm fa-clock-o"></span></div>
                    <div class="media-body">
                      <p class="h6">Estamos abiertos</p><span>
                        Horas de apertura: 8.00 AM - 4.00 PM de lunes a viernes</span>
                    </div>
                  </div>
                </address>
              </div>
              <div class="col-12 col-md-6 col-xl-3">
                <address>
                  <div class="media flex-column flex-md-row">
                    <div class="media-left"><span class="icon icon-success icon-sm fa-phone"></span></div>
                    <div class="media-body">
                      <p class="h6">Telefono</p>
                      <dl class="dl-horizontal">
                        <dd><a href="tel:#">+51 918535021</a></dd>
                      </dl>
                    </div>
                  </div>
                </address>
              </div>
              <div class="col-12 col-md-6 col-xl-3">
                <address>
                  <div class="media flex-column flex-md-row">
                    <div class="media-left"><span class="icon icon-success icon-sm fa-envelope"></span></div>
                    <div class="media-body">
                      <p class="h6">E-mail</p><a class="text-success-custom" href="mailto:#">info@turismopuno.com</a>
                    </div>
                  </div>
                </address>
              </div>
            </div>
          </div>
        </section>
        <section class="ubicacion">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d604.4961062062848!2d-70.02841104248004!3d-15.840243885049595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915d69eb160ec5dd%3A0x4ddcde1ed69150a8!2sMunicipalidad%20de%20Puno!5e0!3m2!1ses!2spe!4v1617032466144!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
      </main>
      
      <!--===================== Start Footer =========================-->
      <footer class="site-footer">
        <?php
          include "footer.php";
        ?>
      </footer>
      <!--===== End Footer =====-->

    </div>
    <!--===== End Pagina Galeria =====-->

    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>