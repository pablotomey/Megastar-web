<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.min.css" />
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

  <section id="header-ropa">
    <div class="wrapper">
        <h1 class="title">Moda y vestuario</h1>
    </div>
  </section>

  <!--Ofertas-->
  <section id="offers">
    <div class="wrapper">
      <h1>Busca ropa por categoría</h1>
      <div class="offers-cards">
        <div class="card" style="width: 18rem;">
          <a href="./ropa-hombre.php"><img src="img/ropa-hombre-img.jpg" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">Ropa de hombre</h5>
            <p class="card-text"></p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <a href="./ropa-mujer.php"><img src="img/ropa-mujer-img.jpg" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">Moda Mujer</h5>
            <p class="card-text"></p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <a href="./ropa-niño.php"><img src="img/ropa-niño-img.jpg" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">Textil Infantil</h5>
            <p class="card-text"></p>
          </div>
        </div>
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