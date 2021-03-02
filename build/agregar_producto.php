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
<section id="admin">
  <div class="wrapper">
    <h1>Agregar un producto por categoría</h1>
    <form action="guardar.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Nombre del producto</label>
        <input type="text" class="form-control" name="name" id="name" required>
      </div>
      <div class="form-group">
        <label for="description">Descripción del producto</label>
        <input type="text" class="form-control" name="description" id="description" required>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Seleccionar imagen</label>
        <input class="form-control" name="imagen" type="file" id="formFile" accept="image/*">
      </div>

      <select class="form-select" name="category" aria-label="Default select example" require>
        <option selected>Seleccionar categoría</option>
        <option value="header">header</option>
        <option value="destacados">destacados</option>
        <option value="ofertas">ofertas</option>
        <option value="juguetes">juguetes</option>
        <option value="ropa-hombre">ropa hombre</option>
        <option value="ropa-mujer">ropa mujer</option>
        <option value="ropa-infantil">ropa infantil</option>
        <option value="electronica">electronica</option>
        <option value="hogar">hogar</option>
        <option value="zapatillas">zapatillas</option>
        <option value="camping">camping</option>
        <option value="accesorios">accesorios</option>
      </select>

      <div class="form-group">
        <label for="precio">Precio $</label>
        <input type="text" class="form-control" name="precio" id="precio" required>
      </div>

      <div class="d-grid gap-2" style="margin-top:15px;">
        <button class="btn btn-primary" type="submit">Guardar</button>
      </div>
    </form>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>