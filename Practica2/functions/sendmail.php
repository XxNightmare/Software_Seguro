<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('../vendor/autoload.php');

try {

    if(!$atributos['success']){
        header('Location: errormail.php');
    } else {
        // MANDAR A LLAMAR LA PLANTILLA
        $plantilla = file_get_contents('../views_mail/view.html');
    
        // RECUPERAMOS LOS DATOS DEL FORMULARIO
        $correo = isset($_POST['AlternativeEmail']) ? $_POST['AlternativeEmail'] : '';
    
        // Personaliza la plantilla
        $plantillaPersonalizada = str_replace('{email}', $correo, $plantillaPersonalizada);
    
        // Configuración del servidor
        $mail = new PHPMailer(true); // Activa las excepciones
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'generalfenix629@gmail.com';
        $mail->Password = 'vryt nrcp ples lryw';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Destinatarios
        $mail->setFrom('generalfenix629@gmail.com', 'Software Seguro');
        $mail->addAddress($correo, 'Nueva Consulta de Contacto');
    
        // Contenido
        $mail->isHTML(true);
        $mail->Subject = $titulo;
        $mail->Body = $plantillaPersonalizada;
        $mail->send();
        header('Location: successmail.php');
    }
} catch (PHPMailer\PHPMailer\Exception $e) {
    header('Location: errormail.php');
    echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
}
?>
