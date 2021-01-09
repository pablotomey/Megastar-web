<?php

    require 'db.php';

    $idp = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['precio'];

    if($name != null && $description != null && $price != null) {
        $sql = "UPDATE producto SET name='".$name."' , description='".$description."' , precio='".$price."' WHERE id='".$idp."'";
        mysqli_query($conn, $sql);
        if($name=1) {
            header("location: manager.php");
        }
    }

?>