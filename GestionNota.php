<?php
require "conexion.php";
session_start();


?>


<!doctype html>
<html lang="en">

<head>
    <script data-ad-client="ca-pub-9505789916618264" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>CRUD</title>
</head>

<body>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/superhero/bootstrap.min.css" integrity="sha384-HnTY+mLT0stQlOwD3wcAzSVAZbrBp141qwfR4WfTqVQKSgmcgzk+oP0ieIyrxiFO" crossorigin="anonymous">
    <div class="container mt-3">
          <p><img src="logomejor.png" width="180" height="80"></p><h1>Universidad Popular Del Cesar</h1>

    </div>
    

    <div class="container mt-5">
        <h3> <span class="material-icons">
                bookmarks
            </span>Calculadora de Notas</h3>
        <br>
        <form  action="index.php"  id="formulario">
            

            <input type="text" id="IdEstudiante" placeholder="Digite ID de estudiante">
            <input type="text" id="NombreEstudiante" placeholder="Nombre de estudiante">
            <input type="text" id="CodigoMateria" placeholder="Digite codigo de materia">
            <input type="text" id="NombreMateria" placeholder="Digite nombre de materia">

            <br>
            <br>

            <h3>Primer Corte 30%</h3>
            <input type="number" id="quiz1" placeholder="Digite nota del QUIZ" >
            <input type="number" id="porcentajequiz1" placeholder="% QUIZ" >

            <input type="number" id="taller1" placeholder="Digite nota del Taller">
            <input type="number" id="porcentajetaller1" placeholder="% Taller" >
            <input type="number" id="ponderado1" placeholder="ponderado" readonly >

            <BR>
            <input type="number" id="parcialpractico1" placeholder="Nota del parcial practico">
            <input type="number" id="porcentajeparcialpractico1" placeholder="% Parcial Practico" >
            <input type="number" id="parcialteorico1" placeholder="Nota del parcial teorico">
            <input type="number" id="porcentajeparcialteorico1" placeholder="% Parcial Teorico">

            <input type="number" id="definitiva" placeholder="Nota Definitiva" readonly>
            <input id="BtnCalcularCorte1" type="button" class="btn btn-success" value="Calcular"
                onclick="CalcularNota1()">

            <br>
            <br>

            <h3>Segundo Corte 30%</h3>
            <input type="number" id="quiz2" placeholder="Digite nota del QUIZ">
            <input type="number" id="porcentajequiz2" placeholder="% QUIZ" >

            <input type="number" id="taller2" placeholder="Digite nota del Taller">
            <input type="number" id="porcentajetaller2" placeholder="% Taller" >
            <input type="number" id="ponderado2" placeholder="ponderado" readonly>

            <BR>

            <input type="number" id="parcialpractico2" placeholder="Nota del parcial practico">
            <input type="number" id="porcentajeparcialpractico2" placeholder="% Parcial Practico" >

            <input type="number" id="parcialteorico2" placeholder="Nota del parcial teorico">
            <input type="number" id="porcentajeparcialteorico2" placeholder="% Parcial Teorico">

            <input type="number" id="definitiva2" placeholder="Nota Definitiva" readonly>
            <input id="BtnCalcularCorte2" type="button" class="btn btn-success" value="Calcular " onclick="CalcularNota2()">

            <br>
            <br>

            <h3>Tercer Corte 40%</h3>
            <input type="number" id="quiz3" placeholder="Digite nota del QUIZ">
            <input type="number" id="porcentajequiz3" placeholder="% QUIZ" >

            <input type="number" id="taller3" placeholder="Digite nota del Taller">
            <input type="number" id="porcentajetaller3" placeholder="% Taller" >
            <input type="number" id="ponderado3" placeholder="ponderado" readonly >
<br>
            <input type="number" id="parcialpractico3" placeholder="Nota del parcial practico">
            <input type="number" id="porcentajeparcialpractico3" placeholder="% Parcial Practico" >

            <input type="number" id="parcialteorico3" placeholder="Nota del parcial teorico">
            <input type="number" id="porcentajeparcialteorico3" placeholder="% Parcial Teorico">

            <input type="number" id="definitiva3" placeholder="Nota Definitiva" readonly>
            <input id="BtnCalcularCorte3" type="button" class="btn btn-success" value="Calcular" onclick="CalcularNota3()">

            <br>
            <br>
        </form>
     
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="GestionNota.js"></script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Homepage Leaderboard -->
<ins class="adsbygoogle"
style="display:inline-block;width:728px;height:90px"
data-ad-client="ca-pub-1234567890123456"
data-ad-slot="1234567890"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>

</html>