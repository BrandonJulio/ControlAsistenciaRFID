<?php


include('conexionv.php');

if (isset($_POST['insertarelacion'])) {
  $Codigo = $_POST['Codigo'];
  $Grupo = $_POST['Grupo'];
  $Docente = $_POST['Docente'];

  $query = "INSERT INTO relaciondocente(Codigo, Grupo, Docente) VALUES ('$Codigo', '$Grupo', '$Docente')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'Relacion Docente Registrada exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: RelacionDocente.php');

}

?>
