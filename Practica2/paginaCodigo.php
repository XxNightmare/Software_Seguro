<?php
session_start();
	$codigoError = $_SESSION['errorCodigo'];
	if($codigoError == 1){

		?>

		<script defer>
	
	document.addEventListener('DOMContentLoaded', function() {
            
			alert("Codigo Incorrecto, Ingreselo de nuevo");
           
	});
	</script>

		<?php
		ob_start();
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contraseñas Seguras</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/fontawesome_all.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css"
			href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css"
			href="vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--===============================================================================================-->
	</head>

	<body>
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<div class="login100-pic js-tilt" data-tilt>
						<img src="images/img-01.png" alt="IMG">
					</div>

					<form action="functions/VerificarCodigo.php" method="post" class="login100-form validate-form">
						<span class="login100-form-title" style="padding-bottom: 10px;">
							Ingrese el codigo de verificacion que se le envio por correo
						</span>

						<p style="text-align: center; padding-bottom: 20px;">
							Codigo:
						</p>

						<div>Temporizador: <span id="time">03:00</span></div>

						<div class="wrap-input100 validate-input"
							data-validate="Valid email is required: ex@abc.xyz">
							<input class="input100" type="number" name="AlternativeEmail" 
							id="AlternativeEmail" placeholder="Codigo">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>
						</div>

						<div class="container-login100-form-btn">
							<button type="submit" id="cretaeUser" class="login100-form-btn">
								Verificar
							</button>
						</div>
						<div style="width: 100%; margin: 10px 0; text-align: center;">
							<a href="index.html">Regresar</a>
						</div>
					</form>
				</div>
			</div>
		</div>

	<div>
	
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
			function change(name){
				var eye = document.getElementById('eye');
				var eyeOpen = document.getElementById('eyeOpen');
				var pass = document.getElementById('pass');
				if (name == "open"){
					eye.hidden = true;
					eyeOpen.hidden = false;
					pass.type = 'text';

				} else {
					eye.hidden = false;
					eyeOpen.hidden = true;
					pass.type = 'password';
				}
			}
		</script>
		<!--===============================================================================================-->
		<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
		<script src="js/fontawesome_all.min.js"></script>
		<!--===============================================================================================-->
		<script src="js/main.js"></script>
		<!--===============================================================================================-->
		<script src="js/temporizador.js"></script>
	</body>
</html>

