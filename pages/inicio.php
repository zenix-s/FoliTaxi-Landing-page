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
    <link rel="stylesheet" href="../assets/css/inicio_style.css">
    <link rel="stylesheet" href="../assets/css/header.css">
</head>

<body>
    <?php
    echo $componentes->header();
    ?>
    <main>
        <section class="slider">

        </section>

        <section class="servicios-section">
            <h2>Servicios</h2>
            <div class="services-container">
                <div class="service-container">
                    <div class="service">
                        <div class="service-img">
                            <img src="../assets/img/taller-taxis-.jpg" alt="escuela">
                        </div>
                        <div class="service-description">
                            <h3>Escuela de conductores</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                            <a href="#">Saber mas</a>
                        </div>
                    </div>
                </div>
                <div class="service-container">


                    <div class="service">
                        <div class="service-img">
                            <img src="../assets/img/taxis.png" alt="bucle">
                        </div>
                        <div class="service-description">
                            <h3>Bucle magnetico</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                            <a href="#">Saber mas</a>

                        </div>
                    </div>
                </div>
                <div class="service-container">
                    <div class="service">
                        <div class="service-img">
                            <img src="../assets/img/taxis.png" alt="asesoria">
                        </div>
                        <div class="service-description">
                            <h3>Asesoria</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                            <a href="#">Saber mas</a>

                        </div>
                    </div>
                </div>
                <div class="service-container">
                    <div class="service">
                        <div class="service-img">
                            <img src="../assets/img/taxis.png" alt="taller">
                        </div>
                        <div class="service-description">
                            <h3>Taller</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
                            <a href="#">Saber mas</a>

                        </div>
                    </div>
                </div>
            </div>

        </section>


    </main>
</body>

</html>