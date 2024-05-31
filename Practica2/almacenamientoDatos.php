<?php
include("conexion.php");

$con = conectar();

// Obtener los datos del formulario
$email = strtolower($_POST['email']);
$emailAlter = strtolower($_POST['emailAlter']);
$pass = $_POST['pass'];
$first_name = $_POST['first_name'];
$lastName_name_F = $_POST['lastName_name_F'];
$lastName_name_m = $_POST['lastName_name_m'];
$age = $_POST['age'];
$birth_date = $_POST['birth_date'];
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);

// Convertir la fecha de día-mes-año a año-mes-día
$dateB = str_replace('/', '-', $birth_date);
$birth_date_formatted = date('Y-m-d', strtotime($dateB));

// Comprobar si el correo ya está registrado
$sql_check = "SELECT * FROM usuario WHERE name = ?";
$stmt_check = $con->prepare($sql_check);
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    // El correo ya está registrado
    echo "<script>alert('Correo ya registrado');</script>";
    echo "<script>window.location.href = 'index.html';</script>";
} else {
    // Insertar los datos en la base de datos
    $sql_insert = "INSERT INTO usuario (name, pass, hash, alterMail, first_name, lastName_F, lastName_M, birth_date, age) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_insert = $con->prepare($sql_insert);
    $stmt_insert->bind_param("sssssssis", $email, $pass, $pass_hash, $emailAlter, $first_name, $lastName_name_F, $lastName_name_m, $birth_date_formatted, $age);
    $query = $stmt_insert->execute();

    if ($query) {
        Header("Location: index.html");
    } else {
        echo "Error al registrar el usuario";
    }
}

$stmt_check->close();
$stmt_insert->close();
$con->close();
?>
