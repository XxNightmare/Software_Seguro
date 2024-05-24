<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo Enviado exitosamente</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body style="background-color: ghostwhite;">
    <script>
        Swal.fire({
            title: "Error al enviar correo",
            text: "Lo siento, algo salio mal, estamos trabajando para solucionar este problema lo antes posible",
            icon: "error",
            showConfirmButton: true,
            timer: 5000,
        }).then((result) => {
            if (result.dismiss === Swal.DismissReason.timer || result.isConfirmed) {
                window.location.href = "https://alcaim.com/";
            }
        });
            </script>    
</body>
</html>