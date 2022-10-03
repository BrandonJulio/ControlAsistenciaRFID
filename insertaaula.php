<?php


include('conexionv.php');

if (isset($_POST['insertaaula'])) {
  $NombreAula = $_POST['NombreAula'];
  $NumeroPiso = $_POST['NumeroPiso'];

  $query = "INSERT INTO aula(NombreAula, NumeroPiso) VALUES ('$NombreAula', '$NumeroPiso')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'Aula Registrada exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: GestionAula.php');

}

?>
