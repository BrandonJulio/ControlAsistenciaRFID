<?php


include('conexionv.php');

if (isset($_POST['insertahorario'])) {
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
  $Identificacion = $_POST['Identificacion'];



  $query = "INSERT INTO Horarioestudiante(Codigo, Programa, Periodo, Grupo, PrimerDia, HoraInicio1, HoraFin1, Aula1, SegundoDia, HoraInicio2, HoraFin2, Aula2, Identificacion) VALUES ('$Codigo', '$Programa', '$Periodo', '$Grupo', '$PrimerDia', '$HoraInicio1', '$HoraFin1', '$Aula1', '$SegundoDia', '$HoraInicio2', '$HoraFin2', '$Aula2', '$Identificacion')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'Horario Academico Registrado exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: HorarioEstudiante.php');

}

?>
