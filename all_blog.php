<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Blog - Turismo Puno</title>
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
      <header class="page-head all_blog">
        <div class="rd-navbar-wrap bg-transparent">
            <?php 
              include "nav.php";
            ?>
        </div>
        <section class="relative text-center">
          <div class="container">
            <div class="jumbotron text-center">
              <h1 class="animated zoomIn" style="animation-delay: 1s">Blog</h1>
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
            <li class="active">Blog</li>
          </ol>
        </section>
        <!--===== End Miga de Pan =====-->

        <section class="section section-inset-2">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-8">
                <div class="blog-post thumbnail"><img src="images/blog_chimu_1.jpg" alt="">
                  <div class="caption-mod-1">
                    <div class="blog-post-time">
                      <time datetime="2020-10-07">28 de Marzo de 2021 &nbsp;</time><span>por Andrés Ugaz </span>
                    </div>
                    <div class="blog-post-title">
                      <h4 class="text-success-custom"><a href="blog_chimu_1">De cómo una sopa le devolvió el sentido a viajar</a></h4>
                    </div>
                    <div class="blog-post-body text-md-left">
                      <p>“Enrique observaba con resignación cómo muchas de las costumbres con las que creció ser perdían, al mismo tiempo que muchas de las especies que vivían en el lago y alrededores”, comenta Andrés Ugaz de cocinapar.org</p>
                    </div>
                    <div class="blog-post-footer">
                      <div class="badge pull-lg-right"><a class="text-gray" href="blog_chimu_1">2 Comentarios</a></div>
                    </div>
                  </div>
                </div>
                <div class="blog-post thumbnail"><img src="images/blog_tunuhuiri.jpg" alt="">
                  <div class="caption-mod-1">
                    <div class="blog-post-time">
                      <time datetime="2020-10-07">17 de Octubre de 2019 &nbsp;</time><span>Por PNUD PERÚ</span>
                    </div>
                    <div class="blog-post-title">
                      <h4 class="text-success-custom"><a href="blog_tunuhuiri_1">Guardián de la memoria</a></h4>
                    </div>
                    <div class="blog-post-body text-md-left">
                      <p>Tiburcio no escucha bien; un accidente hace tres años lo dejó un poco sordo. Ahora, hay que hablarle fuerte y al oído, en aymara de preferencia, porque no ha sacado sus audífonos hoy.<br>
                        Comparte su desayuno con la Pacha Mama: un chorrito de jugo para ella un sorbo para él, siempre respetando a los Apus que protegen y proveen para la parcialidad de Tunuhuire chico, Centro Poblado de Ichu, en Puno. La importancia de hacer la distinción entre Tunuhuire Grande y Tunuhuire Chico, recuerda Tiburcio, viene de años de historia y separación de los espacios para los hijos del Inca Tunuhuire, la ladera más grande para el mayor y para el menor la más chica. Como esto, Tiburcio recuerda muchas cosas, recuerda todo. La memoria viva de su comunidad.</p>
                    </div>
                    <div class="blog-post-footer">
                      <div class="badge pull-lg-right"><a class="text-gray" href="blog_tunuhuiri_1">2 Commentarios</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <ul class="pagination pagination-center offset-custom-4">
              <li class="disabled"><a href="#"></a></li>
              <li class="active"><a href="#">1</a></li>
              <li class="disabled"><a href="#">2</a></li>
              <li class="disabled"><a href="#"></a></li>
            </ul>
          </div>
        </section>
      </main>

      <!--===================== Start Footer =========================-->
      <footer class="site-footer">
        <?php
          include "footer.php";
        ?>
      <!--===== End Footer =====-->

    </div>
    <!--===== End Pagina Galeria =====-->

    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>