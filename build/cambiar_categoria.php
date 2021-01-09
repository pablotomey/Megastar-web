<?php
  session_start();
  if (empty($_SESSION['active'])) {
    header("location: admin.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.min.css" />
  <title>MegaStar</title>
</head>
<?php

    require 'db.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM producto WHERE id='".$id."'";
    $query = mysqli_query($conn, $sql);

    while($fila = mysqli_fetch_array($query)) {
?>
<section id="admin">
  <div class="wrapper">
    <h1>Actualizar categoría del producto:</h1>
    <p>Categoría actual del producto: <?php echo $fila['category'] ?></p>
    <form action="update_cat.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $fila['id'] ?>">
        <?php } ?>
        <select class="form-select" name="category" aria-label="Default select example">
            <option selected>Cambiar categoría</option>
            <option value="header">header</option>
            <option value="ofertas">ofertas</option>
            <option value="juguetes">juguetes</option>
            <option value="ropa">ropa</option>
            <option value="electronica">electronica</option>
            <option value="hogar">hogar</option>
            <option value="zapatillas">zapatillas</option>
          </select>
        <div class="d-grid gap-2" style="margin-top:15px;">
          <button class="btn btn-primary" type="submit">Actualizar categoría</button>
        </div>
    </form>

  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>