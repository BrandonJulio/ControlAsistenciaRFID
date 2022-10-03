<?php


include('conexionv.php');

if (isset($_POST['insertaplandesarrollo'])) {
  $CodigoPlanAsignatura = $_POST['CodigoPlanAsignatura'];
  $Programa = $_POST['Programa'];
  $Docente = $_POST['Docente'];
  $CodigoMateria = $_POST['CodigoMateria'];
  $Facultad = $_POST['Facultad'];
  $TipoAsignatura = $_POST['TipoAsignatura'];
  $NaturalezaAsignatura = $_POST['NaturalezaAsignatura'];
  $PeriodoAcademico = $_POST['PeriodoAcademico'];
  $FechaInicio = $_POST['FechaInicio'];
  $TotalHoras = $_POST['TotalHoras'];
  $FechaFinalizacion = $_POST['FechaFinalizacion'];



  $query = "INSERT INTO plandesarrollo(CodigoPlanAsignatura, Programa, Docente, CodigoMateria, Facultad, TipoAsignatura, NaturalezaAsignatura, PeriodoAcademico, FechaInicio, TotalHoras, FechaFinalizacion) VALUES ('$CodigoPlanAsignatura', '$Programa', '$Docente', '$CodigoMateria', '$Facultad', '$TipoAsignatura', '$NaturalezaAsignatura', '$PeriodoAcademico', '$FechaInicio', '$TotalHoras', '$FechaFinalizacion')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'Plan de desarrollo de asignatura Registrado exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: PlanDesarrolloAsignatura.php');

}

?>
