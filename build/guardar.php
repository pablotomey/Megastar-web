<?php

    require 'db.php';
    require 'agregar_producto.php';

    $image = $_FILES['imagen']['name'];

    $ruta = 'upload/';
    $archivo = $ruta.$image;

    $resultado = @move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo);

    $nombreProducto = $_POST['name'];
    $descripcion = $_POST['description'];
    $category = $_POST['category'];
    $price = $_POST['precio'];

    if ($nombreProducto != null && $descripcion != null && $image != null && $category != null && $price != null) {
        $sql = "INSERT INTO producto(name,description,image,category,precio) 
        VALUES('".$nombreProducto."','".$descripcion."','".$archivo."','".$category."','".$price."')";
        mysqli_query($conn,$sql);
        if ($nombreProducto = 1) {
            header("location: manager.php");
        }
    }


?>