<?php include('includes/HeaderAsistencia.php'); ?>
<link href="css/button.css" rel="stylesheet" />
<div class="image-fondo cabecera">

</div>
<div class="container p-4">

  <div class="row">

    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="ModficarAsistenciaEstudiante.php" method="POST">
          <div class="form-group">
            <label>Identificación</label>
            <input name="IdentificacionEstudiante" type="text" class="form-control" placeholder="Digite Identificacion" autofocus required="">
          </div>

          <div class="form-group">
            <label>Codigo de la materia</label>
            <input name="CodigoMateria" type="text" class="form-control" placeholder="Codigo de la materia" required="">
          </div>

          <div class="form-group">
            <label>Fecha</label>
            <input name="Fecha" type="date" class="form-control" placeholder="Fecha">
          </div>
          <input type="submit" name="update" class="button" value="Ingresar al aula" style="font-size: 17px;">
        </form>
      </div>
    </div>
  </div>
</div>
<br>


<?php include('includes/footer.php'); ?>