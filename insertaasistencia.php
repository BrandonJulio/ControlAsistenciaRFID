<?php


include('conexionv.php');

if (isset($_POST['insertaasistencia'])) {
  $Codigo = $_POST['Codigo'];
  $Grupo = $_POST['Grupo'];
  $PrimerDia = $_POST['PrimerDia'];
  $HoraInicio1 = $_POST['HoraInicio1'];
  $Aula1 = $_POST['Aula1'];
  $Identificacion = $_POST['Identificacion'];
  $PrimerNombre = $_POST['PrimerNombre'];
  $PrimerApellido = $_POST['PrimerApellido'];

  $query = "INSERT INTO asistencia(Codigo, Grupo, PrimerDia, HoraInicio1, Aula1, Identificacion, PrimerNombre, PrimerApellido) VALUES ('$Codigo', '$Grupo', '$PrimerDia', '$HoraInicio1', '$Aula1', '$Identificacion', '$PrimerNombre', '$PrimerApellido')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
  $_SESSION['message'] = 'Usted no puede ingresar al aula';
    $_SESSION['message_type'] = 'danger';
  header('Location: Asistencia.php');
  }
  else{
      $_SESSION['message'] = 'Asistencia Registrada exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: Asistencia.php');
  
  }



}

?>
