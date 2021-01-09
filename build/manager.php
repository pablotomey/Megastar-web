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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.min.css" />
  <title>MegaStar</title>
</head>

<body>

  <?php
    require 'db.php';
    $sql = "SELECT * FROM producto";
    $resultado = mysqli_query($conn, $sql);
  ?>
  <section id="products">
    <div class="wrapper">
      <div>
        <h1>Productos ingresados en el sistema:</h1>
      </div>
      <a href="agregar_producto.php" type="button" class="btn btn-success" style="margin-bottom: 20px;">Agregar producto</a>
      <a href="cerrar_sesion.php" type="button" class="btn btn-success btn-danger" style="margin-bottom: 20px;">Salir</a>
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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
</body>

</html>