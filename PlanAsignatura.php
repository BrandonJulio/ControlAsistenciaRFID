<?php
require "conexion.php";

session_start();

if (!isset($_SESSION['Identificacion'])) {
    header("Location: index.php");
}

$Identificacion = $_SESSION['Identificacion'];
$TipoUsuario = $_SESSION['TipoUsuario'];
$Usuario = $_SESSION['Usuario'];
$acciones = in_array($TipoUsuario, ["Administrador", "JefeDepartamento", "Docente"]);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Plan de Asignatura</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/principal.css" rel="stylesheet" />

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body background="imagenes/U.jpg" class="body2" class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Control de Asistencia</a><button
            class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>

        <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><?php echo $Usuario; ?><i
                        class="fas fa-user fa-fw"></i></a>
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
                <div class="sb-sidenav-menu tab-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Plan de Asignatura</div>
                        <a class="nav-link" href="principal.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-bars"></i></div>
                            Menu Principal
                        </a>
                        <?php
                        include "MenuOpciones.php"
                        ?>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Estas en:</div>
                        Plan de Asignatura
                    </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">

                    <h1 class="mt-4">Plan de Asignatura</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="principal.php">Menu Principal</a></li>
                        <li class="breadcrumb-item active">Plan de Asignatura</li>
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
                                        <?php if ($TipoUsuario != "Estudiante") { ?>
                                        <form action="insertaplanasignatura.php" method="POST">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="control-label"><b>Codigo Plan de Asignatura</b></label>
                                                        <input type="text" class="form-control" name="CodigoPlan"
                                                            placeholder="Codigo del Plan de Asignatura" minlength="3"
                                                            maxlength="10" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">

                                                    <div class="form-group">
                                                        <label><b>Programa</b></label>
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
                                                <div class="col-lg-2">

                                                    <div class="form-group">
                                                        <label><b>Materia</b></label>
                                                        <br>
                                                        <select class="form-control" name="Materia">
                                                            <option value="0">--------</option>
                                                            <?php
                                            $query = $mysqli->query("SELECT * FROM materia");
                                            while ($valores = mysqli_fetch_array($query)) {
                                                echo '<option value="' . $valores[NombreMateria] . '">' . $valores[NombreMateria] . '</option>';
                                            }
                                            ?>
                                                        </select>
                                                    </div>
                                                </div>



                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label"><b>Horas acompañamiento
                                                            Docente</b></label>
                                                        <input type="text" class="form-control" name="Hdd"
                                                            placeholder="Horas acompañamiento docente" minlength="1"
                                                            maxlength="3" pattern="[0-9]{1,10}"
                                                            title="Solamente se admiten números" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="control-label"><b>Horas trabajo practicas</b></label>
                                                        <input type="text" class="form-control" name="Htp"
                                                            placeholder="Horas trabajo practicas" minlength="1"
                                                            maxlength="3" pattern="[0-9]{1,10}"
                                                            title="Solamente se admiten números" required="required">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="control-label"><b>Horas trabajo Independiente</b></label>
                                                        <input type="text" class="form-control" name="Hti"
                                                            placeholder="Horas trabajo Independiente" minlength="1"
                                                            maxlength="3" pattern="[0-9]{1,10}"
                                                            title="Solamente se admiten números" required="required">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="control-label"><b>Tipo de Asignatura</b></label>
                                                        <select class="form-control" name="TipoAsignatura"
                                                            required="required">
                                                            <option>-------</option>
                                                            <option value="Teorica">Teorica</option>
                                                            <option value="Practica">Practica</option>
                                                            <option value="Practica">Teorico-Practica</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label"><b>Naturaleza de la Asignatura</b></label>
                                                        <select class="form-control" name="NaturalezaAsignatura"
                                                            required="required">
                                                            <option>-------</option>
                                                            <option value="Habilitable">Habilitable</option>
                                                            <option value="No-Habilitable">No-Habilitable</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="control-label"><b>Descripción de la
                                                            Asignatura</b></label>
                                                        <textarea name="DescripcionAsignatura"
                                                            placeholder="Digite la Descripción de la Asignatura"
                                                            rows="2" cols="50"></textarea>

                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="control-label"><b>Objetivo General</b></label>
                                                        <textarea name="ObjetivoGeneral"
                                                            placeholder="Digite el Objetivo General" rows="2"
                                                            cols="70"></textarea>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="control-label"><b>Objetivos especificos del plan de
                                                            Asignatura</b></label>
                                                        <textarea name="ObjetivosEspecificos"
                                                            placeholder="Digite los Objetivos Especificos" rows="2"
                                                            cols="50"></textarea>

                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="control-label"><b>Estrategias Pedagógicas
                                                            Metodológicas</b></label>
                                                        <textarea name="EstrategiasPedagogicas"
                                                            placeholder="Digite las Estrategias Pedagógicas Metodológicas"
                                                            rows="2" cols="70"></textarea>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="control-label"><b>Competencias genericas del plan de
                                                            Asignatura</b></label>
                                                        <textarea name="CompetenciasGenericas"
                                                            placeholder=" Digite las Competencias Genericas" rows="2"
                                                            cols="50"></textarea>

                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="control-label"><b>Referencias Bibliográficas</b></label>
                                                        <textarea name="ReferenciasBibliograficas"
                                                            placeholder="Digite las Referencias Bibliograficas" rows="2"
                                                            cols="70"></textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="insertaplanasignatura"
                                                    class="btn btn-success"><i
                                                        class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>
                                                <button type="button" id="btnLimpiar" class="btn btn-danger"><i
                                                        class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</button>
                                            </div>
                                        </form>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid mb-1">
                            <div class="card shadow-lg border-0 rounded-lg mt-3">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Codigo</th>
                                                    <th>Programa</th>
                                                    <th>Materia</th>
                                                    <th>HDD</th>
                                                    <th>HTP</th>
                                                    <th>HTI</th>
                                                    <th>Tipo</th>
                                                    <th>Naturaleza</th>
                                                    <th>Descripción de la Asignatura</th>
                                                    <th>Objetivo General</th>
                                                    <th>Objetivo Especificos</th>
                                                    <th>Estrategias Pedagogicas</th>
                                                    <th>Competencias Genericas</th>
                                                    <th>Referencias Bibliograficas</th>
                                                    <?php if($acciones): ?>
                                                        <th>Acción</th>
                                                    <?php endif; ?>


                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
										$query = "SELECT * FROM planasignatura";
										$result_tasks = mysqli_query($mysqli, $query);

										while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                                <tr>
                                                    <td><?php echo $row['CodigoPlan']; ?></td>
                                                    <td><?php echo $row['Programa']; ?></td>
                                                    <td><?php echo $row['Materia']; ?></td>
                                                    <td><?php echo $row['Hdd']; ?></td>
                                                    <td><?php echo $row['Htp']; ?></td>
                                                    <td><?php echo $row['Hti']; ?></td>
                                                    <td><?php echo $row['TipoAsignatura']; ?></td>
                                                    <td><?php echo $row['NaturalezaAsignatura']; ?></td>
                                                    <td><?php echo $row['DescripcionAsignatura']; ?></td>
                                                    <td><?php echo $row['ObjetivoGeneral']; ?></td>

                                                    <td><?php echo $row['ObjetivosEspecificos']; ?></td>
                                                    <td><?php echo $row['EstrategiasPedagogicas']; ?></td>
                                                    <td><?php echo $row['CompetenciasGenericas']; ?></td>
                                                    <td><?php echo $row['ReferenciasBibliograficas']; ?></td>


                                                    <?php if($acciones): ?>
                                                        <td>
                                                        <a href="EditarUsuario.php?Identificacion=<?php echo $row['Identificacion'] ?>"
                                                            class="btn btn-secondary">
                                                            <i class="fas fa-marker"></i>
                                                        </a>
                                                        <a href="EliminarUsuario.php?Identificacion=<?php echo $row['Identificacion'] ?>"
                                                            class="btn btn-danger">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                 <?php endif; ?>

                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Creado por BJ 2022</div>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>