<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php include('includes/HeaderCargarAsistencia.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <br>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <h2>De kevin, Para Eglenis 🌺🌺💖🎈🎈</h2>
                </div>
                <br>
                <br>
                <br>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-8">
                    <h5>Eres la niña mas bonita y cariñosa que he conocido, 🌺😍😎sin pensarlo llegaste a mi mundo a darle alegria y felicidad 🤣😍😍, hemos hablado por poco tiempo y aunque ha sido a distancia he podido aprender muchas cosas de ti, nunca cambies y sigue con esa sonrisa tan hermosa que tienes. 😘😘😘😘</h5>
                       <br>
                <br>
                    <h5>
Te mando montones de besos, abrazos y que DIOS 👏👏👏🙏 siempre te bendiga y puedas lograr todos tus sueños, todos tus deseos y propositos, estoy completamente seguro de que asi sera. 😘😘🌺

</h5>
<br>
<h4>
    Tu buen amigo, Kevin Gómez Cantillo ☘
</h4>
<img src="imagen.gif" width="450" height="700">
                  


                </div>
            </div>
        </div>
        <!-- Modal -->
      
        <div class="modal fade" id="modalPdf" tabindex="-1" aria-labelledby="modalPdf" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ver Reporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe id="iframePDF" frameborder="0" scrolling="no" width="100%" height="500px"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script>
                            function onSubmitForm() {
                                var frm = document.getElementById('form1');
                                var data = new FormData(frm);
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function () {
                                    if (this.readyState == 4) {
                                        var msg = xhttp.responseText;
                                        if (msg == 'success') {
                                            alert(msg);
                                            $('#exampleModal').modal('hide')
                                        } else {
                                            alert(msg);
                                        }

                                    }
                                };
                                xhttp.open("POST", "upload.php", true);
                                xhttp.send(data);
                                $('#form1').trigger('reset');
                            }
                            function openModelPDF(url) {
                                $('#modalPdf').modal('show');
                                $('#iframePDF').attr('src','<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/sistema/'; ?>'+url);
                            }
        </script>

    </body>
</html>
