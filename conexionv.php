<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'controlasistencia'
) or die(mysqli_erro($mysqli));

?>
