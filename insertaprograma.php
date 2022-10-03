<?php


include('conexionv.php');

if (isset($_POST['insertaprograma'])) {
  $NombrePrograma = $_POST['NombrePrograma'];
  $CantidadCreditos = $_POST['CantidadCreditos'];
  $NombreFacultad = $_POST['NombreFacultad'];

  $query = "INSERT INTO programa(NombrePrograma, CantidadCreditos,NombreFacultad) VALUES ('$NombrePrograma', '$CantidadCreditos', '$NombreFacultad')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'programa Registrado exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: GestionPrograma.php');

}

?>
