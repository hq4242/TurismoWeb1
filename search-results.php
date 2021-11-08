<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Turismo Puno</title>
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
      <header class="page-head bg-galeria">
        <div class="rd-navbar-wrap bg-transparent">
            <?php 
              include "nav.php";
            ?>
        </div>
        <section class="relative text-center">
          <div class="container">
            <div class="jumbotron text-center">
              <h1 class="animated zoomIn" style="animation-delay: 1s">Galeria</h1>
              <br><br>
              <img class="animated fadeInUp" style="animation-delay: 2s" src="images/resaltado.png" alt="">
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
            <li class="active">Galeria</li>
          </ol>
        </section>
        <!--===== End Miga de Pan =====-->
        <section class="section section-inset-1">
          <div class="container">
            <h2>New search</h2>
            <hr>
            <div class="row justify-content-center">
              <div class="col-12 col-lg-8">
                <form class="rd-mailform search-res">
                  <div class="form-wrap">
                    <label for="exampleInputSearch"></label>
                    <input class="form-input" type="text" placeholder="Search..." id="exampleInputSearch">
                    <button class="btn btn-success btn-sm btn-min-width-xs" type="submit">Search</button>
                  </div>
                </form>
                <ol class="search-result text-left ordered-list-mod-1">
                  <li>
                    <h6><a class="text-success-custom" href="#">Home: UX Design</a></h6><span class="text-gray">Page</span>
                    <p>Crafting unique experiences by enhancing usability, accessibility and pleasure ...</p>
                  </li>
                  <li>
                    <h6><a class="text-success-custom" href="#">Home: Responsive Design</a></h6><span class="text-gray">Page</span>
                    <p>Our company makes fully adaptive web projects that automatically adjust to any screen that they are viewed on. ...</p>
                  </li>
                  <li>
                    <h6><a class="text-success-custom" href="#">Highest priority</a></h6><span class="text-gray">Page</span>
                    <p>The goal to accomplish – turn every customer into a happy owner of a new handcrafted design. The better you feel after our cooperation, the happier we are. The more your new site meets your perfect design expectations, the more your project is doomed to succeed.</p>
                  </li>
                  <li>
                    <h6><a class="text-success-custom" href="#">Discovering Client Stories</a></h6><span class="text-gray">Page</span>
                    <p>Every customer who comes for a new design has his or her own story. They are so diverse that you unintentionally start collecting them in your memory, and even implement them in the new designs. Isn`t it how the personal approach to each new customer should be like?</p>
                  </li>
                </ol>
              </div>
              <ul class="pagination pagination-center offset-custom-2">
                <li class="disabled"><a href="#"></a></li>
                <li class="disabled"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li class="active"><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#"></a></li>
              </ul>
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