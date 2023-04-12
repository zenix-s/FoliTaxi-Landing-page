<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="prueba2-style.css">
  <link rel="stylesheet" href="assets/css/general.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/icons/bootstrap-icons.css">
  <title>Tu página de inicio</title>
  <!-- Aquí tus archivos CSS -->
</head>
<body>
<header>
    <div class="logo">
      <img src="assets/img/logo.png" alt="logo">
    </div>
    <div class="navegacion">
      <ul>
        <li><a href="inicio.php">Inicio</a></li>
        <li><a href="mecanica.php">Mecanica</a></li>
        <li><a href="reservas.php">Reservas</a></li>
        <li><a href="asesoria.php">asesoria</a></li>
        <li><a href="conductores.php">conductores</a></li>
      </ul>
    </div>
    <div class="sesion">
      <ul>
        <li><a href="index.php">Iniciar Sesion</a></li>
        <li><a href="index.php">Registrarse</a></li>
      </ul>
    </div>
    <div class="mobile-close-header">
      <i class="bi bi-list"></i>
    </div>
  </header>

  <section class="testimonials">
      <div class="testimonial testimonial-1">
        <p>Comentario 1</p>
      </div>
      <div class="testimonial testimonial-2">
        <p>Comentario 2</p>
      </div>
      <div class="testimonial testimonial-3">
        <p>Comentario 3</p>
      </div>
      <div class="testimonial testimonial-4">
        <p>Comentario 4</p>
      </div>
      <div class="testimonial testimonial-5">
        <p>Comentario 5</p>
      </div>
      <div class="testimonial testimonial-6">
        <p>Comentario 6</p>
      </div>
    </section>


    <section >
      <div class="testimonials">
        <div class="testimonial testimonial-1">
          <p>Comentario 1</p>
          <div class=" testimonial-2">
            <p>Comentario 2</p>
          </div>
          <div class=" testimonial-3">
            <p>Comentario 3</p>
          </div>
          <div class=" testimonial-4">
            <p>Comentario 4</p>
          </div>
          <div class=" testimonial-5">
            <p>Comentario 5</p>
          </div>
          <div class=" testimonial-6">
            <p>Comentario 6</p>
          </div>
        </div>
      </div>
      <div class="testimonials">
        <div class="testimonial testimonial-2">
          <p>Comentario 2</p>
        </div>
        <div class="testimonial testimonial-3">
          <p>Comentario 3</p>
        </div>
        <div class="testimonial testimonial-4">
          <p>Comentario 4</p>
        </div>
        <div class="testimonial testimonial-5">
          <p>Comentario 5</p>
        </div>
        <div class="testimonial testimonial-6">
          <p>Comentario 6</p>
        </div>
      </div>
      
    </section>
    
    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_column-gap-20 vc_row-o-equal-height vc_row-flex pofo-featurebox-equal-height">
        <div class="wpb_column vc_column_container vc_col-has-fill vc_col-sm-4 col-xs-mobile-fullwidth">
            <div class="vc_column-inner bg-position-center-center vc_custom_1528960246903">
            <div class="wpb_wrapper">
                <div class="grid-item feature-box-4 featurebox4 pofo-featurebox featurebox4-1">
                <div class="content">
                    <figure>
                    <img src="tu-imagen-servicio1.jpg" width="600" height="488" alt="" srcset="tu-imagen-servicio1.jpg 600w, tu-imagen-servicio1-300.jpg 300w, tu-imagen-servicio1-768.jpg 768w, tu-imagen-servicio1-81.jpg 81w, tu-imagen-servicio1-full.jpg 800w" sizes="(max-width: 600px) 100vw, 600px" class="icon-image">
                    <div class="opacity-medium bg-extra-dark-gray"></div>
                    <figcaption>
                        <span class="text-medium-gray margin-10px-bottom display-inline-block">Reservar cita</span>
                        <div class="bg-deep-pink separator-line-horrizontal-full display-inline-block margin-10px-bottom" style="background:#e3092e; height:1px;"></div>
                        <span class="text-extra-large display-block text-white alt-font margin-25px-bottom width-60 md-width-100 sm-width-100 sm-margin-seven-bottom xs-width-100" style="font-weight: 700; color: #ffffff;">Título Servicio 1</span>
                        <a class="btn btn-very-small btn-white font-weight-300" target="_self" href="tu-enlace-servicio1">SELECCIONAR</a>
                    </figcaption>
                    </figure>
                </div>
                </div>
            </div>
            </div>
        </div>
        
    </div>
    <div class="container">
        <img src="img_avatar.png" alt="Avatar" class="image">
        <div class="overlay">Reservar cita</div>
    </div>
            

    <script>
    window.addEventListener("resize", function () {
  const testimonials = document.querySelectorAll(".testimonial");
  const screenWidth = window.innerWidth;

  if (screenWidth <= 600) {
    testimonials.forEach((testimonial) => {
      testimonial.style.width = "100%";
    });
  } else {
    testimonials.forEach((testimonial) => {
      testimonial.style.width = "";
    });
  }
});

  </script>

</body>
</html>

