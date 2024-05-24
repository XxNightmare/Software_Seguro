<?php
    include("conexion.php");

    $con = conectar();

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario VALUES('', '$email','$pass','$pass_hash');";
    $query= mysqli_query($con, $sql);

    if($query){
        Header("Location: index.html");
    }else {
    }
?>
