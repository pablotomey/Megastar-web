<?php

    require 'db.php';

    $id = $_GET['id'];
    $ruta = 'upload/';
    $sql2 = "SELECT image FROM producto WHERE id='".$id."'";
    $query = mysqli_query($conn, $sql2);
    $resultado = mysqli_fetch_array($query);

    if (isset($resultado['image'])) {
        if (file_exists($resultado['image'])){
            unlink($resultado['image']);
        }
    }

    $sql = "DELETE FROM producto WHERE id='".$id."'";
    mysqli_query($conn, $sql);
    header('location: manager.php');
?>