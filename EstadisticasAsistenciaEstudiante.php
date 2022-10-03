<?php

//if (isset($_POST['filtro'])) {
  $Fecha = $_POST['Fecha'];

$con = new mysqli("localhost","root","","controlasistencia"); // Conectar a la BD
$sql = "select * from asistenciaestudiante where Fecha='".$Fecha."'"; // Consulta SQL

$sqlcount = "select COUNT(*) as t FROM asistenciaestudiante WHERE Fecha ='".$Fecha."' and Asistio='Asistió'";


$query = $con->query($sql); // Ejecutar la consulta SQL
$aux=$query;
$query=$con->query($sqlcount);
$aux1=$query;
//echo $sqlcount;
$data = array(); // Array donde vamos a guardar los datos

$datacount=array();

while($r = $aux->fetch_object()){ // Recorrer los resultados de Ejecutar la consulta SQL
    $data[]=$r; // Guardar los resultados en la variable $data
   // echo $data;
}

while($r = $aux1->fetch_object()){ // Recorrer los resultados de Ejecutar la consulta SQL
    $datacount[]=$r; // Guardar los resultados en la variable $data
   // echo $data;
}


//echo $data[]=$r;
//}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Asistencia de estudiants</title>
    <script src="chart.min.js"></script>
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
 <br>
 <br>

<canvas id="chart1" style="width:100%;" height="100"></canvas>
<script>
var ctx = document.getElementById("chart1");
var data = {
        labels: [ 
        <?php foreach($data as $d):?>
        "<?php echo $d->Fecha?>", 
       
        <?php endforeach; ?>
        ],
        datasets: [{
            label: 'Asistencia',
            data: [
        <?php foreach($datacount as $d):?>
        <?php echo $d->t;?>, 
      

        <?php endforeach; ?>
            ],
            backgroundColor: "#9b59b6",
            borderColor: "#9b59b6",
            borderWidth: 10
        }]
    };
var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    };
var chart1 = new Chart(ctx, {
    type: 'bar', /* valores: line, bar*/
    data: data,
    

    options: options
});
</script>
</body>

</html>