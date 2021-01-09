<?php

    require 'db.php';

    $alert = ''; 

    session_start();

    if (empty($_POST['email']) || empty($_POST['password'])) {

        $alert = 'Debe ingresar un usuario y contraseña';
    } else {

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $query = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password = '$pass' ");

        $result = mysqli_num_rows($query);

        if($result > 0) {
            
            $data = mysqli_fetch_array($query);
            $_SESSION['active'] = true;
            $_SESSION['email'] = $data['email'];

            header("location: manager.php");
        }else {
            header("location: admin.php");
            session_destroy();
        }
    }
?>