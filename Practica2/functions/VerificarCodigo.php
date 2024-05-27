<?php
session_start();

$var = $_SESSION['var'];
$codigoVeri = $_POST["AlternativeEmail"]; 
#echo $var."hola".$codigoVeri;

if($var == $codigoVeri){
    Header("Location: ../updatePassword.html");
   
}else{
    #echo "Codigo de verificacion Incorrecto";
    $_SESSION['errorCodigo']=1;
    Header("Location: ../paginaCodigo.php");
}

?>