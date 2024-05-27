<?php

    include("../conexion.php");

    $con = conectar();

    session_start();
    $email = $_POST["AlternativeEmail"];

    $codigo = rand(1432, 8988);
    #echo $codigo;
    $to= $email;
    $subject="Codigo de recuperacion de Contraseña xD";
    $message="Codigo: $codigo ";
    $headers='From: jona88738@gmail.com'."\r\n".
    'Reply-To: jona88738@gmail.com';
    
    $consulta = mysqli_query($con,"SELECT*FROM usuario where alterMail='$email'");
    if(mysqli_num_rows($consulta) > 0){
        if(mail($to,$subject,$message,$headers)){
       
            $_SESSION['var'] = $codigo;
            $_SESSION['alterEmail'] = $email;
            $_SESSION['errorCodigo'] = 0;
            Header("Location: ../paginaCodigo.php");
            
        
        }else{
            echo "Error";
        }
    }else{
        $_SESSION['errorCodigo'] = 1;
        Header("Location: ../forgetPass.php");
    }
    

?>