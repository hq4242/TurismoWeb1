<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Sobre Nosotros - Turismo Puno</title>
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
      <header class="page-head sobre-nosotros">
        <div class="rd-navbar-wrap bg-transparent">
          <?php 
            include "nav.php";
          ?>
        </div>
        <section class="relative text-center" id="banner">
          <div class="container">
            <div class="jumbotron text-center">
              <br><br>
              <h1 class="animated zoomIn" style="animation-delay: 1s">Sobre Nosotros</h1>
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
            <li class="active">MMP</li>
          </ol>
        </section>
        <!--===== End Miga de Pan =====-->
        <section class="section section-inset-1">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-lg-offset-2">
                  <dl class="terms-list">
                    <dt class="h4 text-uppercase">Municipalidad Provincial de Puno</dt>
                    <hr>
                    <img src="images/mppuno.jpg" alt="">
                    <br><br>
                    <dd class="text-md-left"> El Gobierno Municipal de Puno; como ente gestor del desarrollo integral de su jurisdicción, tiene la noble responsabilidad de promocionar la actividad de turismo e impulsar la reactivación económica del sector turismo a consecuencia del COVID-19, por lo que de acuerdo a lo programado el plan de trabajo de la Sub Gerencia de Turismo y Comercio Exterior, se tiene como prioridad <b> PROMOCIONAR E IMPULSAR LA REACTIVACIÓN ECONÓMICA DEL SECTOR DE TURISMO DE LA CIUDAD DE PUNO,</b> mediante un proyecto denominado <B>“LANZAMIENTO DE UNA PAGINA WEB - TURISMO PUNO PARA EL MUNDO”.</B></dd>
                  </dl>
                </div>
              </div>
            </div>
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