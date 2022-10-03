<?php
require "conexion.php";
session_start();
if (!isset($_SESSION['Identificacion'])) {
    header("Location: index.php");
}
$Identificacion = $_SESSION['Identificacion'];
$TipoUsuario = $_SESSION['TipoUsuario'];



$Contraseña = '';
$TipoUsuario = '';
$Usuario = '';

if (isset($_GET['Identificacion'])) {
  $Identificacion = $_GET['Identificacion'];
  $query = "SELECT * FROM usuario WHERE Identificacion=$Identificacion";
  $result = mysqli_query($mysqli, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Contraseña = $row['Contraseña'];
    $TipoUsuario = $row['TipoUsuario'];
    $Usuario = $row['Usuario'];
  }
}

if (isset($_POST['update'])) {
  $Identificacion = $_GET['Identificacion'];
  $Contraseña = $_POST['Contraseña'];
  $TipoUsuario = $_POST['TipoUsuario'];
  $Usuario = $_POST['Usuario'];


  $query = "UPDATE usuario set Contraseña = '$Contraseña', TipoUsuario='$TipoUsuario', Usuario='$Usuario' WHERE Identificacion=$Identificacion";
  mysqli_query($mysqli, $query);
  $_SESSION['message'] = 'Usuario Modificado exitosamente!';
  $_SESSION['message_type'] = 'warning';
  header('Location: GestionUsuario.php');
}

?>
<?php include('includes/header.php'); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="EditarUsuario.php?Identificacion=<?php echo $_GET['Identificacion']; ?>" method="POST">
          <div class="form-group">
            <label><b>Identificación</b></label>
            <input name="Identificacion" type="text" class="form-control" value="<?php echo $Identificacion; ?>" readonly placeholder="Actualizar Identificacion" autofocus>
          </div>

         

          <div class="form-group">
            <input name="TipoUsuario" type="text" class="form-control" value="<?php echo $TipoUsuario; ?>" readonly placeholder="Actualizar Tipo de Usuario">
          </div>

          <div class="form-group">
            <input name="Usuario" type="text" class="form-control" value="<?php echo $Usuario; ?>" readonly placeholder="Actualizar usuario">
          </div>

          <div class="form-group">
            <input name="Contraseña" type="text" class="form-control" value="<?php echo $Contraseña; ?>" placeholder="Actualizar Contraseña" autofocus required oninvalid="setCustomValidity('El campo Primer Apellido es obligatorio')" oninput="setCustomValidity('')" />
          </div>
          <input type="submit" name="update" class="btn-success" value="Actualizar">
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>