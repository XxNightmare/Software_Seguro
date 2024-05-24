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
            title: "Correo Enviado exitosamente!",
            text: "Gracias por mandarnos un correo, espera hasta que te contactemos!",
            icon: "success",
            showConfirmButton: true,
            timer: 5000,
        }).then((result) => {
            if (result.dismiss === Swal.DismissReason.timer || result.isConfirmed) {
                window.location.href = "../have_token.html";
            }
        });
            </script>    
</body>
</html>