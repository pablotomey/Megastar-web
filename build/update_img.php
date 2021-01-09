<?php

    require 'db.php';

    $id = $_POST['id'];

    $ruta = 'upload/';
    $sql2 = "SELECT image FROM producto WHERE id='".$id."'";
    $query = mysqli_query($conn, $sql2);
    $resultado = mysqli_fetch_array($query);

    if (isset($resultado['image'])) {
        if (file_exists($resultado['image'])){
            unlink($resultado['image']);
        }
    }

    
    $img = $_FILES['imagen']['name'];
    $archivo = $ruta.$img;
    $moveImg = @move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo);

    if($img != null) {
        $sql = "UPDATE producto SET image='".$archivo."'  WHERE id='".$id."'";
        mysqli_query($conn, $sql);
        if($category=1) {
            header("location: manager.php");
        }
    }

?>