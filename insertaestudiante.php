<?php


include('conexionv.php');


if (isset($_POST['insertaestudiante'])) {
  $TipoDocumento = $_POST['TipoDocumento'];
  $Identificacion = $_POST['Identificacion'];
  $FechaExpedicion = $_POST['FechaExpedicion'];
  $PrimerNombre = $_POST['PrimerNombre'];
  $SegundoNombre = $_POST['SegundoNombre'];
  $PrimerApellido = $_POST['PrimerApellido'];
  $SegundoApellido = $_POST['SegundoApellido'];
  $FechaNacimiento = $_POST['FechaNacimiento'];
  $Sexo = $_POST['Sexo'];
  $Celular = $_POST['Celular'];
  $Correo = $_POST['Correo'];
  $EstadoCivil = $_POST['EstadoCivil'];
  $Icfes = $_POST['Icfes'];
  $Sisben = $_POST['Sisben'];
  $NombrePrograma = $_POST['NombrePrograma'];
  $Direccion = $_POST['Direccion'];
  $Ciudad = $_POST['Ciudad'];
  $Departamento = $_POST['Departamento'];
  $Pais = $_POST['Pais'];


  $query = "INSERT INTO estudiante(TipoDocumento, Identificacion, FechaExpedicion, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, FechaNacimiento, Sexo, Celular, Correo, EstadoCivil, Icfes, Sisben, NombrePrograma, Direccion, Ciudad, Departamento, Pais) VALUES ('$TipoDocumento', '$Identificacion', '$FechaExpedicion', '$PrimerNombre', '$SegundoNombre', '$PrimerApellido', '$SegundoApellido', '$FechaNacimiento', '$Sexo', '$Celular', '$Correo', '$EstadoCivil', '$Icfes', '$Sisben', '$NombrePrograma', '$Direccion', '$Ciudad', '$Departamento', '$Pais')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Ocurrio un error, verifique los datos registrados.");
  }

  $_SESSION['message'] = 'Estudiante Registrado exitosamente!';
  $_SESSION['message_type'] = 'success';
  header('Location: GestionEstudiante.php');

}

?>
