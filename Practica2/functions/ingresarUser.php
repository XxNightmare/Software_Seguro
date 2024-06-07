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

// Convertir la fecha de día-mes-año a año-mes-día
$dateB = str_replace('/', '-', $birth_date);
$birth_date_formatted = date('Y-m-d', strtotime($dateB));

// Comprobar si el correo ya está registrado
$sql_check = "SELECT * FROM usuario WHERE name_ = ?";
$stmt_check = $con->prepare($sql_check);
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    // El correo ya está registrado
    echo "<script>alert('Correo ya registrado');</script>";
    echo "<script>window.location.href = '../test.php';</script>";
} else {

    $id = $_SESSION['user_id'];

    if($id == 1){

        // Insertar los datos en la base de datos
    $sql_insert = "INSERT INTO usuario (name_, pass, hash, alterMail, first_name, lastName_F, lastName_M, birth_date, age, id_perfil) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_insert = $con->prepare($sql_insert);
    $stmt_insert->bind_param("sssssssiss", $email, $pass, $pass_hash, $emailAlter, $first_name, $lastName_name_F, $lastName_name_m, $birth_date_formatted, $age,$id_perfil);
    $query = $stmt_insert->execute();

    if ($query) {
        Header("Location: ../test.php");
        #echo $id_perfil;
    } else {
        echo "Error al registrar el usuario";
    }
    }else{
        $_SESSION['NoPermiso'] = 1;

        Header("Location: ../test.php");

    }
    
}

$stmt_check->close();
$stmt_insert->close();
$con->close();
?>
