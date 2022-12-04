<?php
require "conexion.php";

$PrimerNombre = '';
$SegundoNombre = '';

$PrimerApellido = '';
$SegundoApellido = '';
$FechaNacimiento = '';
$Sexo = '';
$Celular = '';
$Correo = '';
$Direccion = '';

if (isset($_POST['updatedocente'])) {
  $Identificacion = $_POST['Identificacion'];
  echo($Identificacion);
  $PrimerNombre = $_POST['PrimerNombre'];
  echo($PrimerNombre);
  $SegundoNombre = $_POST['SegundoNombre'];
  $PrimerApellido = $_POST['PrimerApellido'];
  $SegundoApellido = $_POST['SegundoApellido'];
  $FechaNacimiento = $_POST['FechaNacimiento'];
  $Sexo = $_POST['Sexo'];
  $Celular = $_POST['Celular'];
  $Correo = $_POST['Correo'];
  $Direccion = $_POST['Direccion'];
  $Ciudad = $_POST['Ciudad'];
  $Departamento = $_POST['Departamento'];
  $Pais = $_POST['Pais'];
  $Estado = $_POST['Estado'];

  $query = "UPDATE docente set PrimerNombre = '$PrimerNombre', SegundoNombre='$SegundoNombre', PrimerApellido='$PrimerApellido',SegundoApellido='$SegundoApellido',
  FechaNacimiento='$FechaNacimiento', Sexo='$Sexo', Celular='$Celular', Correo='$Correo', Direccion='$Direccion',Ciudad='$Ciudad', Departamento='$Departamento', Pais='$Pais', Estado='$Estado'  WHERE Identificacion=$Identificacion";
  $result = mysqli_query($mysqli, $query);
  if(!$result) 
  { 
    echo" 
    <script language='javascript'> 
    alert('ERROR AL EDITAR LOS DATOS') 
    window.location='GestionDocente.php' 
    </script>"; 
    exit(); 
  } 
  else 
  { 
    echo" 
    <script language='javascript'> 
    alert('Registro exitoso, Presione aceptar para Continuar') 
    window.location='GestionDocente.php' 
    </script>"; 
  }
}

?>