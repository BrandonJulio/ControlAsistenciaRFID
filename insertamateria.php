<?php


include('conexionv.php');

if (isset($_POST['insertamateria'])) {
  $CodigoMateria = $_POST['CodigoMateria'];
  $NombreMateria = $_POST['NombreMateria'];
  $NumeroCredito = $_POST['NumeroCredito'];
  $Programa = $_POST['Programa'];


  $query = "INSERT INTO materia(CodigoMateria, NombreMateria, NumeroCredito, Programa) VALUES ('$CodigoMateria', '$NombreMateria', '$NumeroCredito', '$Programa')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'Materia Registrada exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: GestionMateria.php');

}

?>
