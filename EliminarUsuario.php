<?php
include("conexionv.php");
if (!isset($_SESSION['Identificacion'])) {
	header("Location: index.php");
}

if(isset($_GET['Identificacion'])) {
  $Identificacion = $_GET['Identificacion'];
  $query = "DELETE FROM usuario WHERE Identificacion = $Identificacion";
  $result = mysqli_query($conn, $query);
 
  if(!$result) {
    die("Ha ocurrido un error.");
  }else{
    $_SESSION['message'] = 'Usuario Eliminado Satisfactoriamente';
    $_SESSION['message_type'] = 'danger';
  }

  header('Location: GestionUsuario.php');
}
?>
