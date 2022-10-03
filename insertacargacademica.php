<?php


include('conexionv.php');

if (isset($_POST['insertacargacademica'])) {
  $Codigo = $_POST['Codigo'];
  $Programa = $_POST['Programa'];
  $Periodo = $_POST['Periodo'];
  $Grupo = $_POST['Grupo'];
  $PrimerDia = $_POST['PrimerDia'];
  $HoraInicio1 = $_POST['HoraInicio1'];
  $HoraFin1 = $_POST['HoraFin1'];
  $Aula1 = $_POST['Aula1'];
  $SegundoDia = $_POST['SegundoDia'];
  $HoraInicio2 = $_POST['HoraInicio2'];
  $HoraFin2 = $_POST['HoraFin2'];
  $Aula2 = $_POST['Aula2'];


  $query = "INSERT INTO cargaacademica(Codigo, Programa, Periodo, Grupo, PrimerDia, HoraInicio1, HoraFin1, Aula1, SegundoDia, HoraInicio2, HoraFin2, Aula2) VALUES ('$Codigo', '$Programa', '$Periodo', '$Grupo', '$PrimerDia', '$HoraInicio1', '$HoraFin1', '$Aula1', '$SegundoDia', '$HoraInicio2', '$HoraFin2', '$Aula2')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'Carga Academica Registrada exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: cargaAcademica.php');

}

?>
