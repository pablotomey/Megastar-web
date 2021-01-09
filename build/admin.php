<?php 

  session_start();
  if (!empty($_SESSION['active'])) {
    header("location: manager.php");
  }
?>
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
    <section id="admin">
      <img src="img/logo-contacto.jpg" alt=""> 
      <div class="wrapper">
        <form action="login.php" method="POST">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required autofocus>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
        </form>
        
      </div>
    </section>
</body>
</html>