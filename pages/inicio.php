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
        <section class="containerSlider">


            <div class="sliderWrapper" id="sliderWrapper">
            

                <div class="sliderCaption">
                    <div class="sliderHead">
                        <h1 class="title">Horario</h1>
                        <span class="subtitle">LUNES A VIERNES DE 09:00 - 19:00</span>
                    </div>                                    
                    <img class="sliderImg" src="../assets/img/sliderPrueba1.png" alt="slider1">
                </div>
                <div class="sliderCaption">
                    <div class="sliderHead">
                        <h1 class="title">Servicio</h1>
                        <span class="subtitle">ASISTENCIA URGENCIAS 24 HORAS</span>
                    </div>                
                    <img class="sliderImg" src="../assets/img/sliderPrueba2.png" alt="slider2">
                </div>
                <div class="sliderCaption">
                    <div class="sliderHead">
                        <h1 class="title">Taller</h1>
                        <span class="subtitle">Reparador autorizado TAXI de Madrid. SIN CUOTA DE MANTENIMIENTO</span>
                    </div>                        
                    <img class="sliderImg" src="../assets/img/sliderPrueba3.png" alt="slider3">
                </div>


            </div>


            <div class="btn-container left-btn">
                <div class="btn sliderPrev" id="btnPrev"><</div>
            </div>
            <div class="btn-container right-btn">
                <div class="btn sliderNext" id="btnNext">></div>
            </div>
            
        </section>
        <script src="..//assets/js/inicio_script.js"></script>



    </main>
</body>
</html>
