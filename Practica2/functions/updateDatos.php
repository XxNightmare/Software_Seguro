<?php
session_start();
include("../conexion.php");

$con = conectar();

// Obtener los datos del formulario
$email = strtolower($_POST['email']);
$emailAlter = strtolower($_POST['emailAlter']);
$pass = $_POST['pass'];
$first_name = $_POST['first_name'];
$lastName_name_F = $_POST['lastName_name_F'];
$lastName_name_m = $_POST['lastName_name_m']; 
$age = $_POST['age'];
$id_perfil = $_POST['id_perfil'];
$birth_date = $_POST['birth_date'];
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);

$id = $_SESSION['user_id'];
$correo_P = $_SESSION['correo_personal'];
if($id == 1 || $id ==2){
    if($email != ""){
        $consulta = mysqli_query($con, "UPDATE usuario set name_='$email' where name_ like '$correo_P' ");
    }
    if($emailAlter != ""){
        $consulta = mysqli_query($con, "UPDATE usuario set alterMail='$emailAlter' where name_ like '$correo_P' ");
    }
    if($pass != ""){
        $consulta = mysqli_query($con, "UPDATE usuario set pass='$pass' where name_ like '$correo_P' ");
    }
    if($first_name != ""){
        $consulta = mysqli_query($con, "UPDATE usuario set first_name='$first_name' where name_ like '$correo_P' ");
    }
    if($lastName_name_F != ""){
        $consulta = mysqli_query($con, "UPDATE usuario set lastName_F='$lastName_name_F' where name_ like '$correo_P' ");
    }
    if($lastName_name_m != ""){
        $consulta = mysqli_query($con, "UPDATE usuario set lastName_M='$lastName_name_m' where name_ like '$correo_P' ");
    }
    if($age != ""){
        $consulta = mysqli_query($con, "UPDATE usuario set age='$age' where name_ like '$correo_P' ");
    }
    if($id_perfil != ""){
        $consulta = mysqli_query($con, "UPDATE usuario set id_perfil='$id_perfil' where name_ like '$correo_P' ");
    }
    if($birth_date != ""){
        $consulta = mysqli_query($con, "UPDATE usuario set birth_date='$birth_date' where name_ like '$correo_P' ");
    }
    if($pass_hash != ""){
        $consulta = mysqli_query($con, "UPDATE usuario set hash='$pass_hash' where name_ like '$correo_P' ");
    }
    if($consulta){
        echo "Todo bien";
        // Header("Location: ../test.php");
    }
}else{
    $_SESSION['NoPermiso'] = 1;
    Header("Location: ../test.php");
}


?>