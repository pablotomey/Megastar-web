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
          <li><img src="img/logo-megastar.svg" alt="logo megastar"></li>
          <li><a href="#offers">Ofertas</a></li>
          <li><a href="./ubicacion.html">Ubicación</a></li>
          <li><a href="#">Sobre nosotros</a></li>
        </ul>
      </nav>
    </div>
  </section>
  <!--Category-nav-->
  <section id="category-nav">
    <div class="wrapper">
      <div class="category-items">
        <ul class="second-nav">
          <li><a href="jugueteria.php">Juguetes</a></li>
          <li><a href="ropa.php">Ropa</a></li>
          <li><a href="electronica.php">Electrónica</a></li>
          <li><a href="hogar.php">Hogar</a></li>
          <li><a href="zapatillas.php">Zapatillas</a></li>
      </div>
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
      <h1>Ofertas Megastar</h1>
      <div class="offers-cards">
      <?php

        $ofertas = "ofertas";
        $sql2 = "SELECT * FROM producto WHERE category='".$ofertas."' ";
        $query = mysqli_query($conn, $sql2);

        while($fila = mysqli_fetch_array($query)) {

        ?>
        <div class="card" style="width: 18rem;">
          <img src="<?php echo $fila['image'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $fila['name'] ?></h5>
            <p class="card-text"><?php echo $fila['description'] ?></p>
            <p><?php echo $fila['precio'] ?></p>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!--Footer-->
  <section id="footer">
    <div class="wrapper">
      <div class="footer-block">
        <div class="logo-block">
          <img src="img/logo-megastar.svg" alt="logo-megastar">
          <p>Dublé Almeyda 362, Porvenir <br> Magallanes y la Antartica chilena</p>
          <p> </p>
        </div>
        <div class="footer-list">
          <ul>
            <li><a href="ubicacion.html">Ubicanos</a> </li>
            <li><a href="contacto.html">Contacto</a></li>
            <li><a href="#">Nuestra empresa</a></li>
          </ul>
        </div>
        <dir class="footer-social-media">
          <h4>Siguenos en:</h4>
          <div>
            <a href="#"><img src="img/facebook-logo.svg" alt="facebook-logo"></a>
            <a href="#"><img src="img/instagram-logo.svg" alt="facebook-logo"></a>
          </div>
        </dir>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
</body>

</html>