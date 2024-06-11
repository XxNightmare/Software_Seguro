<?php
session_start();
	$codigoError = $_SESSION['NoPermiso'];
	if($codigoError == 1){

		?>

		<script defer>
	
	document.addEventListener('DOMContentLoaded', function() {
            
			alert("No tienes los permisos para realizar dicha accion");
           
	});
	</script>


		<?php
		$_SESSION['NoPermiso'] = 0;
		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Software Seguro</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1600px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});


	 // Pass the ID to the modal when it is shown
	 $('#deleteEmployeeModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var id = button.data('id'); // Extract info from data-* attributes
        var modal = $(this);
        modal.find('.modal-title').text('Delete Employee ' + id);
        modal.find('form').attr('action', './functions/borrarUsuario.php?id=' + id);
    });


});
</script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>Usuarios</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
							<i class="material-icons">&#xE147;</i> 
							<span>Agregar usuario</span>
						</a>
						<a href="http://localhost/Software_Seguro/Practica2/login.html" class="btn btn-info">
							<i class="material-icons person_off">&#xe510;</i> 
							<span>Cerrar Sesion</span>
						</a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover" >
				<thead>
					<tr>
						
						<th>Correo</th>
						<th>Contraseña</th>
						<th>Contraseña Segura</th>
						<th>Correo Alternativo</th>
						<th>Nombre</th>
						<th>Apellido Paterno</th>
						<th>Apellido Materno</th>
						<th>Fecha Nacimiento</th>
						<th>Edad</th>
						<th>Perfil</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
						<?php
							include("./conexion.php");
							
							$con = conectar();
							$sql = "SELECT * FROM usuario";

							$result = $con->query($sql);
							
							// Recorrer los resultados y mostrarlos en la tabla
							while($row = $result->fetch_assoc()) {
								echo "<tr>";
								echo "<td>" . $row["name_"] . "</td>";
								echo "<td>" . $row["pass"] . "</td>";
								echo "<td style=word-wrap: break-word;>" . $row["hash"] . "</td>";
								echo "<td>" . $row["alterMail"] . "</td>";
								echo "<td>" . $row["first_name"] . "</td>";
								echo "<td>" . $row["lastName_F"] . "</td>";
								echo "<td>" . $row["lastName_M"] . "</td>";
								echo "<td>" . $row["birth_date"] . "</td>";
								echo "<td>" . $row["age"] . "</td>";
								echo "<td>" . $row["id_perfil"] . "</td>";
								?>
								<td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal" data-id="<?php echo $row['id']; ?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							 	</td>
								 </tr>
								<?php
							}
						?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="./functions/ingresarUser.php" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				
				
				<div class="modal-body">
			
				<div class="form-group">
						<label>Correo</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Contraseña</label>
						<input type="password" name="pass"  class="form-control" required>
					</div>
					<div class="form-group">
					<label>Correo alterno</label>
					<input type="text" name="emailAlter" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Primer Nombre</label>
						<input type="text" name="first_name" class="form-control" required>
					</div>	

					<div class="form-group">
						<label>Primer Apellido</label>
						<input type="text" name="lastName_name_m" class="form-control" required>
					</div>	
					

					<div class="form-group">
						<label>Segundo Apellido</label>
						<input type="text" name="lastName_name_F" class="form-control" required>
					</div>	
					

					<div class="form-group">
						<label>Cumpleaños</label>
						<input type="date" name="birth_date" class="form-control" required>

					</div>	
					
					<div class="form-group">
						<label>Edad</label>
						<input type="number" name="age" class="form-control" required>
						
					</div>	

					<div class="form-group">
						<label>Id Perfil</label>
						<input type="number" name="id_perfil" class="form-control" required>
						
					</div>	
					
			
			</div>
				

				
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="./functions/updateDatos.php" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Correo</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Contraseña</label>
						<input type="password" name="pass"  class="form-control">
					</div>
					<div class="form-group">
					<label>Correo alterno</label>
					<input type="text" name="emailAlter" class="form-control">
					</div>
					<div class="form-group">
						<label>Primer Nombre</label>
						<input type="text" name="first_name" class="form-control">
					</div>	

					<div class="form-group">
						<label>Primer Apellido</label>
						<input type="text" name="lastName_name_m" class="form-control">
					</div>	
					

					<div class="form-group">
						<label>Segundo Apellido</label>
						<input type="text" name="lastName_name_F" class="form-control">
					</div>	
					

					<div class="form-group">
						<label>Cumpleaños</label>
						<input type="date" name="birth_date" class="form-control">

					</div>	
					
					<div class="form-group">
						<label>Edad</label>
						<input type="number" name="age" class="form-control">
						
					</div>	

					<div class="form-group">
						<label>Id Perfil</label>
						<input type="number" name="id_perfil" class="form-control">
					</div>	
				</div>

				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="./functions/borrarUsuario.php" method="post" >
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee <?php $row["name_"];?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>
</html>