<?php

include_once '../includes/componentes.php';
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
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/icons/bootstrap-icons.css">
</head>

<body>
    <?php
    echo $componentes->header();
    ?>
    <main>
        <section class="containerSlider">
            <div class="sliderWrapper" id="sliderWrapper">
                <div class="sliderCaption" id="1">
                    <div class="sliderHead">
                        <div class="head">
                            <h1 class="title">Horario</h1>
                        </div>
                        <div class="subHead">
                            <span class="subtitle">LUNES A VIERNES DE 09:00 - 19:00</span>
                        </div>
                    </div>                                    
                    <img class="sliderImg" src="../assets/img/sliderPrueba1.png" alt="slider1">
                </div>
                <div class="sliderCaption" id="2">
                    <div class="sliderHead">
                        <div class="head">
                            <h2 class="title">Servicio</h2>
                        </div>
                        <div class="subHead">
                            <span class="subtitle">ASISTENCIA URGENCIAS 24 HORAS</span>
                        </div>
                    </div>                
                    <img class="sliderImg" src="../assets/img/sliderPrueba2.png" alt="slider2">
                </div>
                <div class="sliderCaption" id="3">
                    <div class="sliderHead">
                    <div class="head">
                            <h3 class="title">Taller</h3>
                        </div>
                        <div class="subHead">
                            <span class="subtitle">Reparador autorizado TAXI de Madrid. SIN CUOTA DE MANTENIMIENTO</span>
                        </div>
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


        <section class="freenow-section">
            <div class="freenow-container">
                <div class="freenow-img">
                    <img src="../assets/img/freenow-inicio2.png" alt="freenow">
                </div>
                <div class="freenow-description">
                    <p>WeTaxi Madrid y Free Now ofrecen servicios de mantenimiento y reparación de vehículos con descuentos para taxistas 
                        de Madrid de Free Now con categoría "Bronce" o superior.
                    <br>Además, los conductores pueden obtener descuentos en reparación de taxímetros y luminosos, y se premiará a los 50 
                        mejores taxistas de la flota Free Now.</p>
                    <div class="freenow-link">
                        <a href="https://play.google.com/store/apps/details?id=taxi.android.client&hl=es&gl=US" class="freenow-link-btn">
                            <i class="bi bi-google-play"></i>
                            <div class="freenow-link-text">
                                <span>Descargar en</span>
                                <h5>App Store</h5>
                            </div>
                        </a>
                        <a href="https://apps.apple.com/us/app/free-now-mytaxi/id357852748" class="freenow-link-btn">
                            <i class="bi bi-apple"></i>
                            <div class="freenow-link-text">
                                <span>Descargar en</span>
                                <h5>Google Play</h5>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </section>


        <section class="formulario-contacto-section">
            <!-- datos del formulario nombre apellidos email telefono y mensaje -->
            <div class="formulario-contacto-container">
                <h2>Ponte en contacto</h2>
                <form action="" method="">
                    <div class="input-container">
                        <input type="text" name="nombre" id="nombre" placeholder=" ">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-container">
                        <input type="text" name="apellidos" id="apellidos" placeholder=" ">
                        <label for="apellidos">Apellidos</label>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" id="email" placeholder=" ">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-container">
                        <input type="text" name="telefono" id="telefono" placeholder=" ">
                        <label for="telefono">Telefono</label>
                    </div>
                    <div class="input-container">
                        <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder=" "></textarea>
                        <label for="mensaje">Mensaje</label>
                    </div>
                    <div class="input-container">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>
            <div class="datos-contacto-container">
                <div class="datos-contacto">
                    <div class="datos-contacto-item">
                        <div class="datos-contacto-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="datos-contacto-description">
                            <h3>Telefono</h3>
                            <p>91.141.2826</p>
                        </div>
                    </div>
                    <div class="datos-contacto-item">
                        <div class="datos-contacto-icon">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div class="datos-contacto-description">
                            <h3>Whatsapp</h3>
                            <p>679.823.295</p>
                        </div>
                    </div>
                    <div class="datos-contacto-item">
                        <div class="datos-contacto-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="datos-contacto-description">
                            <h3>Email</h3>
                            <p>info@wetaximadrid.com</p>
                        </div>
                    </div>
                    <div class="datos-contacto-item">
                        <div class="datos-contacto-icon">
                            <i class="bi bi-geo"></i>
                        </div>
                        <div class="datos-contacto-description">
                            <h3>Ubicacion</h3>
                            <p>Isaac Jiménez, 5 28037 Madrid</p>
                        </div>
                    </div>
                </div>
        </section>
        

    </main>
    <?php
        echo $componentes->footer();
        ?>
    <script src="../assets/js/inicio_script.js"></script>
</body>

</html>
