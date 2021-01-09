<?php

    require 'db.php';

    $id = $_POST['id'];
    $category = $_POST['category'];

    if($category != null) {
        $sql = "UPDATE producto SET category='".$category."'  WHERE id='".$id."'";
        mysqli_query($conn, $sql);
        if($category=1) {
            header("location: manager.php");
        }
    }

?>