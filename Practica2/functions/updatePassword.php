<?php
session_start();
  include("../conexion.php");

  $con = conectar();

  $Email =$_SESSION['alterEmail'] ;
  $pass = $_POST['pass'];
  $pass_hash = password_hash($pass, PASSWORD_DEFAULT);


echo $pass." ".$Email." ";

$consulta = mysqli_query($con, "UPDATE usuario set pass='$pass',hassh='$pass_hash'where alterMail like '$Email' ");

if($consulta){
    echo "Todo bien";
    $_SESSION['errorCodigo']=0;
    Header("Location: ../index.html");
}
?>