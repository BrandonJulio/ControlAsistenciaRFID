<?php
require "conexion.php";
session_start();

if (!isset($_SESSION['Identificacion'])) {
    header("Location: index.php");
}



$Identificacion = $_SESSION['Identificacion'];
$TipoUsuario = $_SESSION['TipoUsuario'];
$Usuario = $_SESSION['Usuario'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Jefe de Departamento</title>
	<link href="css/styles.css" rel="stylesheet" />

	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">Control de Asistencia</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

		<ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $Usuario; ?><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Configuración</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Salir</a>
                </div>
            </li>
        </ul>
	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
				<div class="sb-sidenav-menu">
					<div class="nav">
						<div class="sb-sidenav-menu-heading">Gestión de Jefe</div>
						<a class="nav-link" href="principal.php">
							<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
							Menu Principal
						</a>
						<div class="sb-sidenav-menu-heading">Interfaz Principal</div>

						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
							<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
							Gestión General
							<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
						</a>
						<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
							<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
								<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">Area Academica
									<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
								<div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
									<nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="GestionDocente.php">Gestión de Docentes</a><a class="nav-link" href="GestionEstudiante.php">Gestión de Estudiantes</a><a class="nav-link" href="GestionAula.php">Gestión de Aulas</a><a class="nav-link" href="GestionMateria">Gestión de Materias</a></nav>
								</div>
								<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">Area Administrativa
									<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
								<div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
									<nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="GestionFacultad.php">Gestión de Facultad</a><a class="nav-link" href="GestionJefeDepartamento.php">Gestión Jefe de Departamento</a><a class="nav-link" href="GestionPrograma.php">Gestión de programa</a><a class="nav-link" href="GestionUsuario.php">Gestión de Usuarios</a></nav>
								</div>
							</nav>
						</div>
						<div class="sb-sidenav-menu-heading">Otras Seciones</div>
						<a class="nav-link" href="charts.html">
							<div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
							Graficos
						</a><a class="nav-link" href="tabla.php">
							<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
							Consultas
						</a>

						</a><a class="nav-link" href="http://www2.unicesar.edu.co/unicesar/hermesoft/vortal/miVortal/logueo.jsp">
							<div class="sb-nav-link-icon"><i></i></div>
							Vortal Hermesoft
						</a>
					</div>
				</div>
				<div class="sb-sidenav-footer">
					<div class="small">Estas en:</div>
					Gestión de Jefe 
				</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
		     <div class="container-fluid">

				<h1 class="mt-4">Gestión de Jefe de Departamento</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item"><a href="principal.php">Menu Principal</a></li>
						<li class="breadcrumb-item active">Gestión de Jefe de Departamento</li>
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

                                    <form action="insertajefe.php" method="POST">
                                    <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label">Identificación</label>
                                            <input type="text" class="form-control" name="Identificacion"
                                                placeholder="Digite Identificación" minlength="6" maxlength="11"
                                                pattern="[0-9]{1,12}" title="Solamente se admiten números"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label">Primer Nombre</label>
                                            <input type="text" class="form-control" name="PrimerNombre"
                                            placeholder="Digite Primer Nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" 
                                            required="required" minlength="3" maxlength="15" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label">Segundo Nombre</label>
                                            <input type="text" class="form-control" name="SegundoNombre"
                                            placeholder="Digite Segundo Nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" 
                                             minlength="3" maxlength="15" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label">Primer Apellido</label>
                                                <input type="text" class="form-control" name="PrimerApellido"
                                                placeholder="Digite Primer Apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,25}" 
                                                required="required" minlength="3" maxlength="15" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label">Segundo Apellido</label>
                                                <input type="text" class="form-control" name="SegundoApellido"
                                                placeholder="Digite Segundo Apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,25}" 
                                                required="required" minlength="3" maxlength="15" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>



                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label">Fecha de Nacimiento</label>
                                            <input class="form-control" type="date" name="FechaNacimiento"
                                                placeholder="*Ingrese Fecha de nacimiento" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label">Sexo</label>
                                            <select class="form-control" name="Sexo"  required="required">
                                                <option>Seleccione el Sexo</option>
                                                <option value="M">M</option>
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label">Celular</label>
                                                <input type="text" class="form-control" name="Celular"
                                                placeholder="Digite el Celular" minlength="10" maxlength="10"
                                                pattern="[0-9]{1,10}" title="Solamente se admiten números"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label">Correo electrónico</label>
                                            <input class="form-control" type="email" name="Correo"
                                                placeholder="Digite el Correo electrónico" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label">Dirección de domicilio</label>
                                                <input type="text" class="form-control" name="Direccion"
                                                placeholder="Digite la Dirección" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ#/°- ]{1,60}" 
                                                required="required" minlength="12" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label">Ciudad</label>
                                                <input type="text" class="form-control" name="Ciudad"
                                                placeholder="Digite la ciudad" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" 
                                                required="required" minlength="5" maxlength="20" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">

                                    <div class="form-group">
                                        <label><b>Programa</b></label>
                                        <br>


                                        <select class="form-control" name="DepartamentoCargo">
                                            <option value="0">--------</option>
                                            <?php
                                            $query = $mysqli->query("SELECT * FROM programa");
                                            while ($valores = mysqli_fetch_array($query)) {
                                                echo '<option value="' . $valores[NombrePrograma] . '">' . $valores[NombrePrograma] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    </div>


                                </div>
                                <div class="row">


                                	<div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Departamento</label> 
                                                <input type="text" class="form-control" name="Departamento"
                                                placeholder="Digite el Departamento" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" 
                                                required="required" minlength="5" maxlength="20" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Pais</label> 
                                                <input type="text" class="form-control" name="Pais"
                                                placeholder="Digite el Pais" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" 
                                                required="required" minlength="5" maxlength="20" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="insertajefe" class="btn btn-success"><i
                                            class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>
                                    <button type="button" id="btnLimpiar" class="btn btn-danger"><i
                                            class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</button>
                                </div>
                                    </form>
                                </div>
                            </div>
                    </div>
               </div>



                        <div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>Identificacion</th>
											<th>Primer Nombre</th>
											<th>Segundo Nombre</th>
											<th>Primer Apellido</th>
											<th>Segundo Apellido</th>
											<th>Fecha Nacimiento</th>
											<th>Sexo</th>
											<th>Celular</th>

											<th>Acción</th>


										</tr>
									</thead>
									<tbody>

										<?php
										$query = "SELECT * FROM jefedepartamento";
										$result_tasks = mysqli_query($mysqli, $query);

										while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
											<tr>
												<td><?php echo $row['Identificacion']; ?></td>
												<td><?php echo $row['PrimerNombre']; ?></td>
												<td><?php echo $row['SegundoNombre']; ?></td>
												<td><?php echo $row['PrimerApellido']; ?></td>
												<td><?php echo $row['SegundoApellido']; ?></td>
												<td><?php echo $row['FechaNacimiento']; ?></td>
												<td><?php echo $row['Sexo']; ?></td>
												<td><?php echo $row['Celular']; ?></td>
												<td>
													<a href="EditarUsuario.php?Identificacion=<?php echo $row['Identificacion'] ?>" class="btn btn-secondary">
														<i class="fas fa-marker"></i>
													</a>
													<a href="EliminarUsuario.php?Identificacion=<?php echo $row['Identificacion'] ?>" class="btn btn-danger">
														<i class="far fa-trash-alt"></i>
													</a>
												</td>
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
						<div class="text-muted">Copyright &copy; Creado por KS 2020</div>
						<div>
							<a href="#">Politicas de privacidad</a>
							&middot;
							<a href="#">Terminos &amp; Condiciones</a>
						</div>
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