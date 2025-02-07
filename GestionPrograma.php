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
    <title>Programas</title>
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
                class="fa fa-bars"></i></button>

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
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Gestión de Programas</div>
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
                        Gestión de Programas
                    </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Gestión de Programa</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="principal.php">Menu Principal</a></li>
                        <li class="breadcrumb-item active">Gestión de Programa</li>
                    </ol>
                    <div class="row">
                        <div class="col-md-6 display: flex">


                            <?php if (isset($_SESSION['message'])) { ?>
                            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show"
                                role="alert">
                                <?= $_SESSION['message'] ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
							} ?>


                            <div class="card card-body">
                                <form action="insertaprograma.php" method="POST">
                                    <div class="form-group">
                                        <label><b>Nombre del Programa</b></label>
                                        <input type="text" name="NombrePrograma" class="form-control"
                                            placeholder="Digite el nombre del programa"
                                            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,25}" required="required" minlength="6"
                                            maxlength="30" title="Solamente se admiten caracteres">
                                    </div>

                                    <div class="form-group">
                                        <label><b>Cantidad de creditos</b></label>
                                        <input type="number" name="CantidadCreditos" class="form-control"
                                            placeholder="Digite la cantidad de creditos" minlength="1" maxlength="2"
                                            pattern="[0-9]{1,12}" title="Solamente se admiten números"
                                            required="required">
                                    </div>

                                    <div class="form-group">
                                        <label><b>Facultad</b></label>
                                        <br>


                                        <select name="NombreFacultad">
                                            <option value="0">--------</option>
                                            <?php
											$query = $mysqli->query("SELECT * FROM facultad");
											while ($valores = mysqli_fetch_array($query)) {
												echo '<option value="' . $valores[NombreFacultad] . '">' . $valores[NombreFacultad] . '</option>';
											}
											?>
                                        </select>
                                    </div>
									<br>
                                    <input type="submit" name="insertaprograma" class="btn btn-success btn-block"
                                        value="Registrar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mb-1">
                    <div class="card shadow-lg border-0 rounded-lg mt-3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Codigo de Programa</th>
                                            <th>Nombre del Programa</th>
                                            <th>Cantidad De Creditos</th>
                                            <th>Facultad</th>
                                            <th>Acción</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
										$query = "SELECT * FROM programa";
										$result_tasks = mysqli_query($mysqli, $query);

										while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                        <tr>
                                            <td><?php echo $row['CodigoPrograma']; ?></td>
                                            <td><?php echo $row['NombrePrograma']; ?></td>
                                            <td><?php echo $row['CantidadCreditos']; ?></td>
                                            <td><?php echo $row['NombreFacultad']; ?></td>
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
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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