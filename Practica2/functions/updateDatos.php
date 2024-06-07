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
if($id == 1 || $id ==2){

    $consulta = mysqli_query($con, "UPDATE usuario set name_='$email',pass='$pass',hash='$pass_hash',alterMail='$emailAlter', first_name='$first_name',lastName_F='$lastName_name_F',lastName_M='$lastName_name_m',birth_date='$birth_date',age='$age',id_perfil='$id_perfil' where alterMail like '$emailAlter' ");

        if($consulta){
            echo "Todo bien";
            
            Header("Location: ../test.php");
        }
}else{
    $_SESSION['NoPermiso'] = 1;
    Header("Location: ../test.php");
}


?>