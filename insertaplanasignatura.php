<?php
include('conexionv.php');

if (isset($_POST['insertaplanasignatura'])) {
  $CodigoPlan = $_POST['CodigoPlan'];
  $Programa = $_POST['Programa'];
  $Materia = $_POST['Materia'];
  $Hdd = $_POST['Hdd'];
  $Htp = $_POST['Htp'];
  $Hti = $_POST['Hti'];
  $TipoAsignatura = $_POST['TipoAsignatura'];
  $NaturalezaAsignatura = $_POST['NaturalezaAsignatura'];
  $DescripcionAsignatura = $_POST['DescripcionAsignatura'];
  $ObjetivoGeneral = $_POST['ObjetivoGeneral'];
  $ObjetivosEspecificos = $_POST['ObjetivosEspecificos'];
  $EstrategiasPedagogicas = $_POST['EstrategiasPedagogicas'];
  $CompetenciasGenericas = $_POST['CompetenciasGenericas'];
  $ReferenciasBibliograficas = $_POST['ReferenciasBibliograficas'];

  $query = "INSERT INTO planasignatura(CodigoPlan, Programa, Materia, Hdd, Htp, Hti, TipoAsignatura, NaturalezaAsignatura, DescripcionAsignatura, ObjetivoGeneral, ObjetivosEspecificos, EstrategiasPedagogicas, CompetenciasGenericas, ReferenciasBibliograficas) VALUES ('$CodigoPlan', '$Programa', '$Materia', '$Hdd', '$Htp', '$Hti', '$TipoAsignatura', '$NaturalezaAsignatura', '$DescripcionAsignatura', '$ObjetivoGeneral', '$ObjetivosEspecificos', '$EstrategiasPedagogicas', '$CompetenciasGenericas', '$ReferenciasBibliograficas')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'Plan de asignatura Registrado exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: planAsignatura.php');

}

?>
