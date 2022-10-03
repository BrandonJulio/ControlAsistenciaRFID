<?php
require "conexion.php";
$IdentificacionDocente=$_POST['IdentificacionDocente'];
$CodigoMateria=$_POST['CodigoMateria'];
$Fecha=$_POST['Fecha'];
$Asistio="Asistió";


$query="UPDATE asistenciadocente SET Asistio='$Asistio' WHERE IdentificacionDocente='".$IdentificacionDocente."' and CodigoMateria='".$CodigoMateria."' and Fecha='".$Fecha."'";


  $result = mysqli_query($mysqli, $query);


  if(!$result) 
{ 
echo" 
<script language='javascript'> 
alert('Error') 
window.location='AsistenciaDocente.php' 
</script>"; 
exit(); 
} 
else 
{ 
echo" 
<script language='javascript'> 
alert('..:::: BIENVENIDO A CLASE QUERIDO PROFESOR::::..') 
window.location='AsistenciaDocente.php' 
</script>"; 
}

?>