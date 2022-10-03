<?php

require "conexion.php";

session_start();
if (isset($_SESSION['Identificacion'])) {
	header("Location: principal.php");
}


if ($_POST) {

	$Usuario = $_POST['Usuario'];
	$TipoUsuario = $_POST['TipoUsuario'];
	$Contraseña = $_POST['Contraseña'];

	$sql = "SELECT Identificacion, Usuario, Contraseña, TipoUsuario FROM usuario WHERE Usuario='$Usuario'";
	//echo $sql;
	$resultado = $mysqli->query($sql);
	$num = $resultado->num_rows;

	if ($num > 0) {
		$row = $resultado->fetch_assoc();
		$password_bd = $row['Contraseña'];
		$usuario_bd = $row['Usuario'];
		$tipousuario_bd = $row['TipoUsuario'];
		
		$pass_c = ($Contraseña);
		$usuario_c = ($Usuario);
		$tipousuario_c = ($TipoUsuario);


		if ($usuario_bd != $usuario_c) {
			echo "Verifique el usuario";
		}

		if ($password_bd == $pass_c and $usuario_bd == $usuario_c and $tipousuario_bd == $tipousuario_c) {

			$_SESSION['Identificacion'] = $row['Identificacion'];
			$_SESSION['TipoUsuario'] = $row['TipoUsuario'];
			$_SESSION['Usuario'] = $row['Usuario'];


			header("Location: principal.php");
		} else {

			echo "Verifique las credenciales";
		}
	} else {
		echo "Verifique tipo de usuario";
	}
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Iniciar Sesión en Control Asistencia</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body style="background-color:#E5E8E8;">

	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container mb-1">
					<div class="row justify-content-center">
						<div class="col-lg-5">


							<div class="card shadow-lg border-0 rounded-lg mt-2">
								<div class="card-body">
									<p><img src="logoupc.png" width="150" height="145">
										<h5 class="text-center font-weight-light mt-1">Iniciar Sesión en</h5>
										<h3 class="text-center font-weight-light mt-1"><b>Control de Asistencias</b></b></h3>
									</p>
									<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
										<div class="form-group"><label class="small mb-1" for="Usuario">Usuario</label><input class="form-control py-4" name="Usuario" type="text" placeholder="Ingrese Usuario" autofocus="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" 
                                            required="required" minlength="3" maxlength="15" title="Solamente se admiten caracteres" /></div>

										<div class="form-group"><label class="small mb-1" for="TipoUsuario">Tipo de Usuario</label><input class="form-control py-4" name="TipoUsuario" type="text" placeholder="Ingrese tipo de Usuario" required="" /></div>


										<div class="form-group"><label class="small mb-1" for="inputPassword">Contraseña</label><input class="form-control py-4" id="inputPassword" name="Contraseña" type="password" placeholder="Ingrese Contraseña" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ 0-9]{1,30}" 
                                            required="required" minlength="4" maxlength="15" title="Solamente se admiten caracteres"/></div>
										<div class="form-group">
											<div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Recordar Contraseña</label></div>
										</div>
										<div class="form-group d-flex align-items-center justify-content-between mt-0 mb-0"><a class="small" href="password.html">Olvidaste la Contraseña?</a>
											<button type="submit" id="alerta" class="btn btn-success">Iniciar Sesión</button></div>
									</form>
								</div>

							</div>
						</div>
					</div>
				</div>
			</main>
		</div>





		<nav class="navbar navbar-expand-lg navbar-dark bg-success ">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">

				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
					</li>

				</ul>

			</div>
		</nav>

		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>