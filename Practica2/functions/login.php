<?php
session_start();
  include("../conexion.php");

  $con = conectar();

  $Email =$_POST['correo'] ;
  $pass = $_POST['contra'];
  #$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    // Preparar la consulta SQL
    $sql = "SELECT * FROM usuario WHERE name_ = '$Email' AND pass = '$pass'";

    // Ejecutar la consulta
    $result = $con->query($sql);

    // Comprobar si el usuario existe
    if ($result->num_rows > 0) {
        echo "El usuario existe.";
        // Obtener los datos del usuario
    $row = $result->fetch_assoc();
    $user_id = $row['id_perfil']; // Asumimos que el campo ID en tu tabla se llama 'id'

    // Guardar el ID del usuario en una variable de sesión
    $_SESSION['user_id'] = $user_id;
    $_SESSION['NoPermiso'] = 0;

   
        

        Header("Location: ../test.php");
    } else {
        echo "El usuario no existe.";
    }


?>