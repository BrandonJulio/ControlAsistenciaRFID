<?php


include('conexionv.php');

if (isset($_POST['insertafacultad'])) {
  $NombreFacultad = $_POST['NombreFacultad'];
  $CantidadProgramas = $_POST['CantidadProgramas'];
  $Sede = $_POST['Sede'];

  $query = "INSERT INTO facultad(NombreFacultad, CantidadProgramas,Sede) VALUES ('$NombreFacultad', '$CantidadProgramas', '$Sede')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'Facultad Registrada exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: GestionFacultad.php');

}

?>
