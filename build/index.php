<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.min.css" />
  <title>MegaStar</title>
</head>

<body>
  <!--Nav-->
  <section id="nav">
    <div class="wrapper">
      <nav>
        <ul class="main-nav">
          <li><a href="index.php" style="margin-left: 0px;"><img src="img/logo-megastar.svg" alt="logo megastar"></a></li>
          <div id="responsive-nav" class="responsive-nav">
            <li><a href="./index.php">Inicio</a></li>
            <li><a href="./ofertas.php">Ofertas</a></li>
            <li><a href="./ubicacion.html">Ubicación</a></li>
          </div>
            <li class="nav-toggle"><a href="javascript: void(0)" onclick="showNav()"><img src="img/icon_menu.svg"></a></li>
        </ul>
      </nav>
    </div>
  </section>
  <!--Carousel-->
  <section id="carousel">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      <?php

        require 'db.php';
        $header = "header";
        $sql1 = "SELECT image FROM producto WHERE category='".$header."' ";
        $query = mysqli_query($conn, $sql1);

        $i = 0;
        while($fila = mysqli_fetch_array($query)) {
          $active = '';
          
          if ($i == 0) {
            $active = "active";
          }
        ?>
        <div class="carousel-item <?php echo $active ?>">
          <img src="<?php echo $fila['image'] ?>" class="d-block w-100" alt="...">
        </div>
        <?php $i++; } ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!--Ofertas-->
  <section id="offers">
    <div class="wrapper">
      <h1>Elíge una categoría</h1>
      <div class="offers-cards">
      <a href="./jugueteria.php">
        <div class="card bg-dark text-white" style="width: 18rem;">
          <img src="img/jugueteria-cat-img.png" class="card-img-top" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title">Jugueteria</h5>
          </div>
        </div>
        </a>
        <a href="./electronica.php">
        <div class="card bg-dark text-white" style="width: 18rem;">
          <img src="img/electronica-cat-img.png" class="card-img-top" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title">Electrónica</h5>
          </div>
        </div>
        </a>
        <a href="./ropa.php">
        <div class="card bg-dark text-white" style="width: 18rem;">
          <img src="img/ropa-cat-img.png" class="card-img-top" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title">Textil</h5>
          </div>
        </div>
        </a>
        <a href="./hogar.php">
        <div class="card bg-dark text-white" style="width: 18rem;">
          <img src="img/hogar-cat-img.png" class="card-img-top" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title">Hogar</h5>
          </div>
        </div>
        </a>
        <a href="./zapatillas.php">
        <div class="card bg-dark text-white" style="width: 18rem;">
          <img src="img/zapatillas-cat-img.png" class="card-img-top" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title">Zapatillas</h5>
          </div>
        </div>
        </a>
        <a href="./camping.php">
        <div class="card bg-dark text-white" style="width: 18rem;">
          <img src="img/camping-cat-img.png" class="card-img-top" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title">Camping</h5>
          </div>
        </div>
        </a>
        <a href="./accesorios.php">
        <div class="card bg-dark text-white" style="width: 18rem;">
          <img src="img/accesorios-cat-img.png" class="card-img-top" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title">Accesorios</h5>
          </div>
        </div>
        </a>
      </div>
    </div>
  </section>
  <!--Footer-->
  <section id="footer">
    <div class="wrapper">
      <div class="footer-container">
        <div class="footer-block">
          <div class="logo-block">
            <img src="img/logo-megastar.svg" alt="logo-megastar">
            <p>Dublé Almeyda 362, Porvenir <br> Magallanes y la Antartica chilena</p>
            <p> </p>
          </div>
          <div class="footer-list">
            <img src="img/redcompra.png" alt="">
          </div>
          <dir class="footer-social-media">
            <h4>Siguenos en:</h4>
            <div>
              <a href="https://www.facebook.com/groups/894238500611824/?ref=share"><img src="img/facebook-logo.svg" alt="facebook-logo"></a>
              <a href="https://www.instagram.com/josephporvenir/"><img src="img/instagram-logo.svg" alt="instagram-logo"></a>
            </div>
          </dir>
        </div>
      </div>
    </div>
  </section>

  <script src="js/app.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
</body>

</html>