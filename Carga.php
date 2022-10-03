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
  <title>Carga Academica</title>
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
            <div class="sb-sidenav-menu-heading">Carga Academica</div>
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
          Carga Academica
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">

          <h1 class="mt-4">Gestión de Carga Academica</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="principal.php">Menu Principal</a></li>
            <li class="breadcrumb-item active">Gestión de Carga Academica</li>
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

                    <form name="f1" action="insertacargacademica.php" method="POST">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="form-group">
                            <label>Codigo y Materia</label>
                            <br>
                            <select class="form-control" name="Codigo">
                              <option value="0">--------</option>
                              <?php
                              $query = $mysqli->query("SELECT * FROM relaciondocente");
                              while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="' . $valores[Codigo] . '">' . $valores[Codigo] . '</option>';
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
                            <label class="control-label">Periodo Academico</label>
                            <input type="text" class="form-control" name="Periodo" placeholder="Digite el Periodo Academico" required="required" minlength="3" maxlength="30" title="Solamente se admiten caracteres">
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="form-group">
                            <label>Grupo</label>
                            <br>
                            <select class="form-control" name="Grupo">
                              <option value="0">--------</option>
                              <?php
                              $query = $mysqli->query("SELECT * FROM relaciondocente");
                              while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="' . $valores[Grupo] . '">' . $valores[Grupo] . '</option>';
                              }
                              ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="form-group">
                            <label class="control-label">Primer Dia</label>
                            <select class="form-control" name="PrimerDia" required="required">
                              <option>----------</option>
                              <option value="Lunes">Lunes</option>
                              <option value="Martes">Martes</option>
                              <option value="Miercoles">Miercoles</option>
                              <option value="Jueves">Jueves</option>
                              <option value="Viernes">Viernes</option>
                              <option value="Sabado">Sabado</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-lg-3">
                          <div class="form-group">
                            <label class="control-label">Hora Inicio</label>
                            <select name=HoraInicio1 class="form-control" onchange="cambia_provincia()">
                              <option value="0" selected>Seleccione
                              <option value="1">6:00
                              <option value="2">7:00
                              <option value="3">8:00
                              <option value="4">9:00
                              <option value="5">10:00
                              <option value="6">11:00
                              <option value="7">12:00
                              <option value="8">13:00
                              <option value="9">14:00
                              <option value="10">15:00
                              <option value="11">16:00
                              <option value="12">17:00
                              <option value="13">18:00
                              <option value="14">19:00
                              <option value="15">20:00
                              <option value="16">21:00


                            </select>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="form-group">
                            <label class="control-label">Hora Fin</label>
                            <select name=HoraFin1 class="form-control">
                              <option value="-">-
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-3">
                        <div class="form-group">
                                        <label>Aula</label>
                                        <br>
                                        <select name="Aula1" class="form-control">
                                            <option value="0">--------</option>
                                            <?php
                                            $query = $mysqli->query("SELECT * FROM aula");
                                            while ($valores = mysqli_fetch_array($query)) {
                                                echo '<option value="' . $valores[NombreAula].' ' .$valores[NumeroPiso]. '">' . $valores[NombreAula].' '.$valores[NumeroPiso]. '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                      </div>
                      </div>



                      <script>
                        var provincias_1 = new Array("-", "6:59", "7:59", "8:59", "9:59", "10:59", "11:59");
                        var provincias_2 = new Array("-", "7:59", "8:59", "9:59", "10:59", "11:59", "12:59");
                        var provincias_3 = new Array("-", "8:59", "9:59", "10:59", "11:59", "12:59", "13:59");
                        var provincias_4 = new Array("-", "9:59", "10:59", "11:59", "12:59", "13:59", "14:59");
                        var provincias_5 = new Array("-", "10:59", "11:59", "12:59", "13:59", "14:59", "15:59");
                        var provincias_6 = new Array("-", "11:59", "12:59", "13:59", "14:59", "15:59", "16:59");
                        var provincias_7 = new Array("-", "12:59", "13:59", "14:59", "15:59", "16:59", "17:59");
                        var provincias_8 = new Array("-", "13:59", "14:59", "15:59", "16:59", "17:59", "18:59");
                        var provincias_9 = new Array("-", "14:59", "15:59", "16:59", "17:59", "18:59", "19:59");
                        var provincias_10 = new Array("-", "15:59", "16:59", "17:59", "18:59", "19:59", "20:59");
                        var provincias_11 = new Array("-", "16:59", "17:59", "18:59", "19:59", "20:59", "21:59");
                        var provincias_12 = new Array("-", "17:59", "18:59", "19:59", "20:59", "21:59");
                        var provincias_13 = new Array("-", "18:59", "19:59", "20:59", "21:59");
                        var provincias_14 = new Array("-", "19:59", "20:59", "21:59");
                        var provincias_15 = new Array("-", "20:59", "21:59");
                        var provincias_16 = new Array("-", "21:59");


                        var todasProvincias = [
                          [],
                          provincias_1,
                          provincias_2,
                          provincias_3,
                          provincias_4,
                          provincias_5,
                          provincias_6,
                          provincias_7,
                          provincias_8,
                          provincias_9,
                          provincias_10,
                          provincias_11,
                          provincias_12,
                          provincias_13,
                          provincias_14,
                          provincias_15,
                          provincias_16,


                        ];

                        function cambia_provincia() {
                          //tomo el valor del select del pais elegido 
                          var HoraInicio1
                          HoraInicio1 = document.f1.HoraInicio1[document.f1.HoraInicio1.selectedIndex].value
                          //miro a ver si el pais está definido 
                          if (HoraInicio1 != 0) {
                            //si estaba definido, entonces coloco las opciones de la provincia correspondiente. 
                            //selecciono el array de provincia adecuado 
                            mis_provincias = todasProvincias[HoraInicio1]
                            //calculo el numero de provincias 
                            num_provincias = mis_provincias.length
                            //marco el número de provincias en el select 
                            document.f1.HoraFin1.length = num_provincias
                            //para cada provincia del array, la introduzco en el select 
                            for (i = 0; i < num_provincias; i++) {
                              document.f1.HoraFin1.options[i].value = mis_provincias[i]
                              document.f1.HoraFin1.options[i].text = mis_provincias[i]
                            }
                          } else {
                            //si no había provincia seleccionada, elimino las provincias del select 
                            document.f1.HoraFin1.length = 1
                            //coloco un guión en la única opción que he dejado 
                            document.f1.HoraFin1.options[0].value = "-"
                            document.f1.HoraFin1.options[0].text = "-"
                          }
                          //marco como seleccionada la opción primera de provincia 
                          document.f1.HoraFin1.options[0].selected = true
                        }
                      </script>

                      <!-- AQUI HAGO EL SEGUNDO DIA-->
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="form-group">
                            <label class="control-label">Segundo Dia</label>
                            <select class="form-control" name="SegundoDia" required="required">
                              <option>----------</option>
                              <option value="Lunes">Lunes</option>
                              <option value="Martes">Martes</option>
                              <option value="Miercoles">Miercoles</option>
                              <option value="Jueves">Jueves</option>
                              <option value="Viernes">Viernes</option>
                              <option value="Sabado">Sabado</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-lg-3">
                          <div class="form-group">
                            <label class="control-label">Hora Inicio</label>
                            <select name=HoraInicio2 class="form-control" onchange="cambia_provincia2()">
                              <option value="0" selected>Seleccione
                              <option value="1">6:00
                              <option value="2">7:00
                              <option value="3">8:00
                              <option value="4">9:00
                              <option value="5">10:00
                              <option value="6">11:00
                              <option value="7">12:00
                              <option value="8">13:00
                              <option value="9">14:00
                              <option value="10">15:00
                              <option value="11">16:00
                              <option value="12">17:00
                              <option value="13">18:00
                              <option value="14">19:00
                              <option value="15">20:00
                              <option value="16">21:00


                            </select>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="form-group">
                            <label class="control-label">Hora Fin</label>
                            <select name=HoraFin2 class="form-control">
                              <option value="-">-
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-3">
                        <div class="form-group">
                                        <label>Aula</label>
                                        <br>
                                        <select name="Aula2" class="form-control">
                                            <option value="0">--------</option>
                                            <?php
                                            $query = $mysqli->query("SELECT * FROM aula");
                                            while ($valores = mysqli_fetch_array($query)) {
                                                echo '<option value="' . $valores[NombreAula].' ' .$valores[NumeroPiso]. '">' . $valores[NombreAula].' '.$valores[NumeroPiso]. '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                      </div>
                      </div>


                      <script>
                        var provincias_1 = new Array("-", "6:59", "7:59", "8:59", "9:59", "10:59", "11:59");
                        var provincias_2 = new Array("-", "7:59", "8:59", "9:59", "10:59", "11:59", "12:59");
                        var provincias_3 = new Array("-", "8:59", "9:59", "10:59", "11:59", "12:59", "13:59");
                        var provincias_4 = new Array("-", "9:59", "10:59", "11:59", "12:59", "13:59", "14:59");
                        var provincias_5 = new Array("-", "10:59", "11:59", "12:59", "13:59", "14:59", "15:59");
                        var provincias_6 = new Array("-", "11:59", "12:59", "13:59", "14:59", "15:59", "16:59");
                        var provincias_7 = new Array("-", "12:59", "13:59", "14:59", "15:59", "16:59", "17:59");
                        var provincias_8 = new Array("-", "13:59", "14:59", "15:59", "16:59", "17:59", "18:59");
                        var provincias_9 = new Array("-", "14:59", "15:59", "16:59", "17:59", "18:59", "19:59");
                        var provincias_10 = new Array("-", "15:59", "16:59", "17:59", "18:59", "19:59", "20:59");
                        var provincias_11 = new Array("-", "16:59", "17:59", "18:59", "19:59", "20:59", "21:59");
                        var provincias_12 = new Array("-", "17:59", "18:59", "19:59", "20:59", "21:59");
                        var provincias_13 = new Array("-", "18:59", "19:59", "20:59", "21:59");
                        var provincias_14 = new Array("-", "19:59", "20:59", "21:59");
                        var provincias_15 = new Array("-", "20:59", "21:59");
                        var provincias_16 = new Array("-", "21:59");


                        var todasProvincias2 = [
                          [],
                          provincias_1,
                          provincias_2,
                          provincias_3,
                          provincias_4,
                          provincias_5,
                          provincias_6,
                          provincias_7,
                          provincias_8,
                          provincias_9,
                          provincias_10,
                          provincias_11,
                          provincias_12,
                          provincias_13,
                          provincias_14,
                          provincias_15,
                          provincias_16,


                        ];

                        function cambia_provincia2() {
                          //tomo el valor del select del pais elegido 
                          var HoraInicio2
                          HoraInicio2 = document.f1.HoraInicio2[document.f1.HoraInicio2.selectedIndex].value
                          //miro a ver si el pais está definido 
                          if (HoraInicio2 != 0) {
                            //si estaba definido, entonces coloco las opciones de la provincia correspondiente. 
                            //selecciono el array de provincia adecuado 
                            mis_provincias = todasProvincias2[HoraInicio2]
                            //calculo el numero de provincias 
                            num_provincias = mis_provincias.length
                            //marco el número de provincias en el select 
                            document.f1.HoraFin2.length = num_provincias
                            //para cada provincia del array, la introduzco en el select 
                            for (i = 0; i < num_provincias; i++) {
                              document.f1.HoraFin2.options[i].value = mis_provincias[i]
                              document.f1.HoraFin2.options[i].text = mis_provincias[i]
                            }
                          } else {
                            //si no había provincia seleccionada, elimino las provincias del select 
                            document.f1.HoraFin2.length = 1
                            //coloco un guión en la única opción que he dejado 
                            document.f1.HoraFin2.options[0].value = "-"
                            document.f1.HoraFin2.options[0].text = "-"
                          }
                          //marco como seleccionada la opción primera de provincia 
                          document.f1.HoraFin2.options[0].selected = true
                        }
                      </script>








                      <div class="modal-footer">
                        <button type="submit" name="insertacargacademica" class="btn btn-success"><i class="fa fa-fw fa-lg fa-check-circle"></i>Registrar</button>
                        <button type="button" id="btnLimpiar" class="btn btn-danger"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</button>
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
                    $query = "SELECT * FROM docente";
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