<?php
require "conexion.php";
$IdentificacionEstudiante=$_POST['IdentificacionEstudiante'];
$CodigoMateria=$_POST['CodigoMateria'];
$Fecha=$_POST['Fecha'];
$Asistio="Asistió";


$query="UPDATE asistenciaestudiante SET Asistio='$Asistio' WHERE IdentificacionEstudiante='".$IdentificacionEstudiante."' and CodigoMateria='".$CodigoMateria."' and Fecha='".$Fecha."'";


  $result = mysqli_query($mysqli, $query);


  if(!$result) 
{ 
echo" 
<script language='javascript'> 
alert('Error') 
window.location='AsistenciaEstudiante.php' 
</script>"; 
exit(); 
} 
else 
{ 
echo" 
<script language='javascript'> 
alert('..:::: BIENVENIDO A CLASE QUERIDO ESTUDIANTE::::..') 
window.location='AsistenciaEstudiante.php' 
</script>"; 
}

?>