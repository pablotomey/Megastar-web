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

<body>

<?php
    require 'db.php';
    $category = '';

    if (empty($_REQUEST['category'])) {
      $sql = "SELECT * FROM producto";
    } else {
      $category = $_REQUEST['category'];
      $sql = "SELECT * FROM producto WHERE category='".$category."'";
    }
    
    $resultado = mysqli_query($conn, $sql);
  ?>
  <section id="products">
    <div class="wrapper">
      <div>
        <h1>Productos ingresados en el sistema:</h1>
      </div>
      <a href="agregar_producto.php" type="button" class="btn btn-success" style="margin-bottom: 20px;">Agregar producto</a>
      <a href="cerrar_sesion.php" type="button" class="btn btn-success btn-danger" style="margin-bottom: 20px;">Salir</a>

      <form class="row g-3" action="manager.php" method="get">
        <div class="col-auto">
          <select class="form-select" name="category" style="width: 250px;" aria-label="Default select example" require>
            <option selected>Filtrar por categoría</option>
            <option value="header">header</option>
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
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Filtrar</button>
        </div>
      </form>

      <table class="table table-striped table-hover" style="font-size:15px;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Imagen</th>
            <th scope="col">Categoria</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($filas=mysqli_fetch_array($resultado)) {
          ?>
          <tr>
            <th scope="row"><?php echo $filas['id'] ?></th>
            <td><?php echo $filas['name'] ?></td>
            <td><?php echo $filas['description'] ?></td>
            <td><?php echo $filas['image'] ?></td>
            <td><?php echo $filas['category'] ?></td>
            <td><?php echo $filas['precio'] ?></td>
            <td>
                <a href="actualizar.php?id=<?php echo $filas['id']?>" type="button" class="btn btn-primary btn-sm">Update</a>
                <a href="eliminar.php?id=<?php echo $filas['id']?>" type="button" class="btn btn-danger btn-sm">Delete</a>
                <a href="cambiar_categoria.php?id=<?php echo $filas['id']?>" type="button" class="btn btn-success btn-sm">CAT</a>
                <a href="cambiar_imagen.php?id=<?php echo $filas['id']?>" type="button" class="btn btn-info btn-sm">IMG</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </section>

  <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>