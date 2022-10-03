<?php
require "conexion.php";

session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Listado de cotizaciones</title>
	<link href="css/styles.css" rel="stylesheet" />

	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
	
	<div id="layoutSidenav_content">
		<main>
			<div class="container-fluid">

				<h1 class="mt-4">Listado de cotizaciones</h1>
				<ol class="breadcrumb mb-4">
					<li class="breadcrumb-item"><a href="FormularioGets.php">Listado de quejas</a></li>
					<li class="breadcrumb-item active">Listado de cotizaciones</li>
				</ol>

				<?php if (isset($_SESSION['message'])) { ?>
					<div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
						<?= $_SESSION['message'] ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php
				} ?>


				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<div class="row">
								<div class="col-lg-12">


								</div>
							</div>
						</div>
					</div>



					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Telefono</th>
										<th>Correo</th>
										<th>Ciudad</th>
										<th>Servicio</th>
										<th>Fecha de registro</th>


									</tr>
								</thead>
								<tbody>

									<?php
									$query = "SELECT * FROM cotizacion";
									$result_tasks = mysqli_query($mysqli, $query);

									while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
										<tr>
											<td><?php echo $row['Nombres']; ?></td>
											<td><?php echo $row['Apellidos']; ?></td>

											<td><?php echo $row['Telefono']; ?></td>
											<td><?php echo $row['Correo']; ?></td>
											<td><?php echo $row['Ciudad']; ?></td>
											<td><?php echo $row['Servicio']; ?></td>

											<td><?php echo $row['FechaRegistro']; ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>

				</div>
			</main>
			<footer class="py-4 bg-light mt-auto">
				<div class="container-fluid">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted">Copyright &copy; Creado por KGC 2021</div>
						
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="js/scripts.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
	<script src="assets/demo/datatables-demo.js"></script>
</body>

</html>