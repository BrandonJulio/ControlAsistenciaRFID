<?php
//Licencia: GNU/GPL
$xarray=array(1, 2, 3, 4, 5 );	//Dias
$yarray=array(5, 5, 5, 6.8, 9); //Porcentaje de ejecucion
$pm=100; //Valor futuro
$x2=0;
$y=0;
$x=0;
$xy=0;
$cantidad=count($xarray);
for($i=0;$i<$cantidad;$i++){
      //Tabla de datos
      print ($xarray[$i]." ---- ".$yarray[$i]."<br>");
      //Calculo de terminos
      $x2 += $xarray[$i]*$xarray[$i];
      $y  += $yarray[$i];
      $x  += $xarray[$i];
      $xy += $xarray[$i]*$yarray[$i];
}
//Coeficiente parcial de regresion
$b=($cantidad*$xy-$x*$y)/($cantidad*$x2-$x*$x);
//Calculo del intercepto
$a=($y-$b*$x)/$cantidad;
//Recta tendencial
//y=a+bx
//Proyeccion en dias para un 100% de la ejecucion:
if ($b!=0) $dias_proyectados=($pm-$a)/$b;
else $dias_proyectados=999999; //Infinitos
$dp=round($dias_proyectados,0);
if($dp<=$pm) 	print $dp."---> Culmina antes de los $pm dias <br>";
if($dp >$pm) 	print $dp ."---> ALARMA: No culmina antes de los $pm dias <br>";
?>