<?php
    include("conexion.php");
    $con = conectar();

    $sql = "SELECT * FROM usuario";
    $query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mostrar tabla</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"
            href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"
            href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"
            href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"
            href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"
            href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/tablas.css">
        <!--===============================================================================================-->
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100" style="width:1100px; padding: 25px;">
                    <!-- TABLA DE DATOS -->
                    <table>
                        <caption>
                            Uso de contraseñas seguras
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center; text-transform: uppercase;">Usuario</th>
                                <th scope="col" style="text-align: center; text-transform: uppercase;">Contraseña</th>
                                <th scope="col" style="text-align: center; text-transform: uppercase;">Contraseña hash</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <th><?php echo $row['name'] ?></th>
                                <th><?php echo $row['pass'] ?></th>
                                <th><?php echo $row['hash'] ?></th>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- OPCIONES PARA REGRESAR -->
                    <div style="width: 100%; text-align: center;">
                        <a href="index.html">Regresar</a>
                    </div>
                </div>
            </div>
        </div>

        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script>
			$('.js-tilt').tilt({
				scale: 1.1
			});
		</script>
        <!--===============================================================================================-->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>
    </body>
</html>