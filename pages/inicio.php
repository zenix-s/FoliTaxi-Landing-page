<?php

include_once '../includes/components.php';
$componentes = new componentes();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/inicio_stylo.css">
    <link rel="stylesheet" href="../assets/css/header.css">
</head>
<body>
    <?php
        echo $componentes->header();
    ?>
    <main>
        <section class="container">
            <div class="sliderCaption">
                <caption class="headCaption">
                    <h1>Prueba H1</h1>
                </caption>
                <caption class="subheadCaption">
                    <span>Prueba SPAN</span>
                </caption>
            </div>
            

        </section>





        <!--
        <section class="primeraSeccion">
            <div class="textoUno">
                <h5 class="horario">LUNES A VIERNES DE 09:00 - 19:00</h5>    
                <h6>ASISTENCIA URGENCIAS 24 HORAS</h6>
            </div>
        </section>
        -->

    </main>
</body>
</html>
