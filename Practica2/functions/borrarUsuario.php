<?php
session_start();
include("../conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conectar a la base de datos
    $con = conectar();

    // Preparar la consulta SQL para eliminar el usuario
    $sql = "DELETE FROM usuario WHERE id = '$id'";

    $id = $_SESSION['user_id'];

    if($id == 1 || $id == 2){

        // Ejecutar la consulta SQL mysqli_query
    $result = mysqli_query($con,$sql);

    // Verificar si se afectaron filas (si se eliminó el usuario)
    if (mysqli_affected_rows($con)  > 0) {
        echo "Empleado eliminado.";
        Header("Location: ../test.php");
    } else {
        
        echo "Error al eliminar el empleado.";
    }
    }else{
        $_SESSION['NoPermiso'] = 1;

        Header("Location: ../test.php");
    }

    
}
?>