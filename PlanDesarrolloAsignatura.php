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
	<title>Plan de Desarrollo de Asignatura</title>
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
						<div class="sb-sidenav-menu-heading">Plan de Desarrollo Asignatura</div>
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
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="PlanAsignatura.php">Plan de Asignaturas</a><a class="nav-link" href="RelacionDocente.php">Relación Docente</a><a class="nav-link" href="CargaAcademica.php">Carga Academica</a>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">Area Administrativa
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="GestionDocente.php">Gestión de Docente</a><a class="nav-link" href="GestionEstudiante.php">Gestión Estudiante</a><a class="nav-link" href="GestionPrograma.php">Gestión de programa</a></nav>
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
					Plan de Desarrollo de Asignatura
				</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
		     <div class="container-fluid">

				<h1 class="mt-4">Plan de Desarrollo de Asignatura</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item"><a href="principal.php">Menu Principal</a></li>
						<li class="breadcrumb-item active">Plan de Desarrollo de Asignatura</li>
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

                                    <form action="insertaplandesarrollo.php" method="POST">
                                    <div class="row">
                                    <div class="col-lg-4">

                                    <div class="form-group">
                                        <label>Codigo Plan</label>
                                        <br>
                                        <select class="form-control" name="CodigoPlanAsignatura">
                                            <option value="0">--------</option>
                                            <?php
                                            $query = $mysqli->query("SELECT * FROM planasignatura");
                                            while ($valores = mysqli_fetch_array($query)) {
                                                echo '<option value="' . $valores[CodigoPlan] . '">' . $valores[CodigoPlan] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="form-group">

                                        <label>Docente</label>
                                        <br>
                                        <select name="Docente" class="form-control">
                                            <option value="0">--------</option>
                                            <?php
                                            $query = $mysqli->query("SELECT * FROM docente");
                                            while ($valores = mysqli_fetch_array($query)) {
                                                echo '<option value="' . $valores[PrimerNombre].' '.$valores[PrimerApellido]. '">' . $valores[PrimerNombre].' '.$valores[PrimerApellido]. '</option>';
                                            }
                                            ?>
                                        </select>
                                    
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Codigo y Materia</label>
                                        <br>
                                        <select name="CodigoMateria" class="form-control">
                                            <option value="0">--------</option>
                                            <?php
                                            $query = $mysqli->query("SELECT * FROM Materia");
                                            while ($valores = mysqli_fetch_array($query)) {
                                                echo '<option value="' . $valores[CodigoMateria].'/' .$valores[NombreMateria]. '">' . $valores[CodigoMateria].'/'.$valores[NombreMateria]. '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                    <div class="col-lg-3">

                                    <div class="form-group">
                                        <label>Programa</label>
                                        <br>
                                        <select class="form-control" name="Programa">
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



                                    <div class="col-lg-3">

                                    <div class="form-group">
                                        <label>Facultad</label>
                                        <br>
                                        <select class="form-control" name="Facultad">
                                            <option value="0">--------</option>
                                            <?php
                                            $query = $mysqli->query("SELECT * FROM Facultad");
                                            while ($valores = mysqli_fetch_array($query)) {
                                                echo '<option value="' . $valores[NombreFacultad] . '">' . $valores[NombreFacultad] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Tipo de Asignatura</label>
                                            <select class="form-control" name="TipoAsignatura"  required="required">
                                                <option>-------</option>
                                                <option value="Teorica">Teorica</option>
                                                <option value="Practica">Practica</option>
                                                <option value="Practica">Teorico-Practica</option>

                                            </select>
                                        </div>
                                    </div>
                                     <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Naturaleza de la Asignatura</label>
                                            <select class="form-control" name="NaturalezaAsignatura"  required="required">
                                                <option>-------</option>
                                                <option value="Habilitable">Habilitable</option>
                                                <option value="No-Habilitable">No-Habilitable</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Periodo Academico</label>
                                                <input type="text" class="form-control" name="PeriodoAcademico"
                                                placeholder="Digite el Periodo Academico" minlength="3" maxlength="6"
                                               
                                                required="required">
                                        </div>
                                    </div>


                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Fecha de Inicio</label>
                                            <input class="form-control" type="date" name="FechaInicio"
                                                placeholder="*Ingrese Fecha de inicio" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Total de Horas</label>
                                                <input type="text" class="form-control" name="TotalHoras"
                                                placeholder="Digite el total de horas" minlength="1" maxlength="2"
                                               
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label">Fecha de Finalización</label>
                                            <input class="form-control" type="date" name="FechaFinalizacion"
                                                placeholder="*Ingrese Fecha de Finalización" required="required">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="modal-footer">
                                    <button type="submit" name="insertaplandesarrollo" class="btn btn-success"><i
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
											<th>Codigo</th>
											<th>Programa</th>
                                            <th>Docente</th>
                                            <th>Codigo Y materia</th>
                                            <th>Facultad</th>
                                            <th>Tipo Asignatura</th>
                                            <th>Naturaleza</th>
                                            <th>Periodo Academico</th>
                                            <th>Fecha Inicio</th>
                                            <th>Total Horas</th>
                                            <th>Fecha Fin</th>
                                            <th>Acción</th>


										</tr>
									</thead>
									<tbody>

										<?php
										$query = "SELECT * FROM plandesarrollo";
										$result_tasks = mysqli_query($mysqli, $query);

										while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
											<tr>
												<td><?php echo $row['CodigoPlanAsignatura']; ?></td>
												<td><?php echo $row['Programa']; ?></td>
                                                <td><?php echo $row['Docente']; ?></td>
                                                <td><?php echo $row['CodigoMateria']; ?></td>
                                                <td><?php echo $row['Facultad']; ?></td>
                                                <td><?php echo $row['TipoAsignatura']; ?></td>
                                                <td><?php echo $row['NaturalezaAsignatura']; ?></td>
                                                <td><?php echo $row['PeriodoAcademico']; ?></td>
                                                <td><?php echo $row['FechaInicio']; ?></td>
                                                <td><?php echo $row['TotalHoras']; ?></td>

												<td><?php echo $row['FechaFinalizacion']; ?></td>
                                              



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