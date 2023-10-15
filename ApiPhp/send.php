<?php

include("./connection.php");

if (isset($_POST['send'])) {

    if (
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['message']) >= 1
    ) {
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
        $consulta = "INSERT INTO form(FULLNAME, PHONE, EMAIL,TEXTAREA) VALUES ('$name','$phone','$email','$message')";
        $resultado = mysqli_query($conexion, $consulta);
    }
}