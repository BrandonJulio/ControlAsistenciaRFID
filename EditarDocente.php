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


if (isset($_GET['Identificacion'])) {
  $Identificacion = $_GET['Identificacion'];
  $query = "SELECT * FROM docente WHERE Identificacion=$Identificacion";
  $result = mysqli_query($mysqli, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

    $PrimerNombre = $row['PrimerNombre'];
    $PrimerApellido = $row['PrimerApellido'];
    $SegundoNombre = $row['SegundoNombre'];
    $SegundoApellido = $row['SegundoApellido'];
    $FechaNacimiento = $row['FechaNacimiento'];
    $Sexo = $row['Sexo'];
    $Celular = $row['Celular'];
    $Correo = $row['Correo'];
    $Direccion = $row['Direccion'];
    $Ciudad = $row['Ciudad'];
    $Pais = $row['Pais'];
    $Departamento = $row['Departamento'];
    $Estado = $row['Estado'];
    $EstadoNuevo='';
    $EstadoInactivo='';
    
    if($Estado='Activo'){
        $EstadoNuevo=$Estado;
    }else{
        $EstadoInactivo='Inactivo';
    }
     
    if($Estado='Inactivo'){
        $EstadoInactivo=$Estado;
    }else{
        $EstadoNuevo='Activo';
    }
  }
  
}


?>
<?php include('includes/header.php'); ?>

<br>

<main>
    <div class="container-fluid">

        <div class="app-title">
            <div>
                <h2><i class="fa fa-edit"></i> Datos personales</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <div class="row">
                        <div class="col-lg-12">

                            <form action="EDocenteupdate.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label"><b>Identificación</b></label>
                                            <input type="text" class="form-control" name="Identificacion"
                                                value="<?php echo $Identificacion; ?>" readonly minlength="6"
                                                maxlength="11" pattern="[0-9]{1,12}"
                                                title="Solamente se admiten números" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label"><b>Primer Nombre</b></label>
                                            <input type="text" class="form-control" name="PrimerNombre"
                                                value="<?php echo $PrimerNombre; ?>"
                                                pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" required="required" minlength="3"
                                                maxlength="15" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label"><b>Segundo Nombre</b></label>
                                            <input type="text" class="form-control" name="SegundoNombre"
                                                value="<?php echo $SegundoNombre; ?>"
                                                pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" required="required" minlength="3"
                                                maxlength="15" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label"><b>Primer Apellido</b></label>
                                            <input type="text" class="form-control" name="PrimerApellido"
                                                value="<?php echo $PrimerApellido; ?>"
                                                pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,25}" required="required" minlength="3"
                                                maxlength="15" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <div class="row">

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label"><b>Segundo Apellido</b></label>
                                            <input type="text" class="form-control" name="SegundoApellido"
                                                value="<?php echo $SegundoApellido; ?>"
                                                pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,25}" required="required" minlength="3"
                                                maxlength="15" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label"><b>Sexo</b></label>
                                            <select class="form-control" name="Sexo" required="required">
                                                <option value="">Seleccione el Sexo</option>
                                                <option value="M">M</option>
                                                <option value="F">F</option>
                                                value="<?php echo $Sexo; ?>"
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label"><b>Fecha de Nacimiento</b></label>
                                            <input class="form-control" type="date" name="FechaNacimiento"
                                                value="<?php echo $FechaNacimiento; ?>"
                                                placeholder="*Ingrese Fecha de nacimiento" required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="control-label"><b>Celular</b></label>
                                            <input type="text" class="form-control" name="Celular"
                                                value="<?php echo $Celular; ?>" minlength="10" maxlength="10"
                                                pattern="[0-9]{1,10}" title="Solamente se admiten números"
                                                required="required">
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <div class="row">

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label"><b>Correo electrónico</b></label>
                                            <input class="form-control" type="email" name="Correo"
                                                value="<?php echo $Correo; ?>"
                                                placeholder="Digite el Correo electrónico" required="required"
                                                minlength="7" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label"><b>Direccion</b></label>
                                            <input type="text" class="form-control" name="Direccion"
                                                value="<?php echo $Direccion; ?>"
                                                pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ#/°- ]{1,60}" required="required"
                                                minlength="12" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label"><b>Ciudad</b></label>
                                            <input type="text" class="form-control" name="Ciudad"
                                                value="<?php echo $Ciudad; ?>" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ#/°- ]{1,60}"
                                                required="required" minlength="5" maxlength="30">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label"><b>Departamento</b></label>
                                            <input type="text" class="form-control" name="Departamento"
                                                value="<?php echo $Departamento; ?>"
                                                pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ#/°- ]{1,60}" required="required"
                                                minlength="5" maxlength="40">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label"><b>Pais</b></label>
                                            <input type="text" class="form-control" name="Pais"
                                                value="<?php echo $Pais; ?>" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ#/°- ]{1,60}"
                                                required="required" minlength="5" maxlength="40">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="control-label"><b>Estado</b></label>
                                            <select class="form-control" name="Estado" required="required">
                                            <option value="">Seleccione Estado</option>
                                                <option value="<?php echo $EstadoNuevo; ?>">Activo</option>
                                                <option value="<?php echo $EstadoInactivo; ?>">Inactivo</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="updatedocente" class="btn btn-success"><i
                                            class="fa fa-fw fa-lg fa-check-circle"></i>Registrar
                                    </button>

                                    <button type="button" id="btnLimpiar" class="btn btn-danger"><i
                                            class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<?php include('includes/footer.php'); ?>