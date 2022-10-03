<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>FILTRO</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="principal.php">Asistencia de estudiantes por fecha</a>
        <ul class="navbar-nav ml-auto mr-0 mr-md-0 my-0 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "Universidad Popular Del Cesar"; ?><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Configuración</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Salir</a>
                </div>
            </li>
        </ul>
      </div>

    </nav>





<div class="image-fondo cabecera">
</div>
<div class="container p-4">

  <div class="row">

    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="EstadisticasAsistenciaEstudianteNoAsistidos.php" method="POST">
       
            <div class="form-group">
            <label>Fecha</label>
            <input name="Fecha" type="date" class="form-control" placeholder="Fecha">
          </div>
          <input type="submit" name="filtro" class="button" value="Buscar" style="font-size: 17px;">
        </form>
      </div>
    </div>
  </div>
</div>
<br>


<!-- BOOTSTRAP 4 SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
