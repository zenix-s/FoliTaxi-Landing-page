<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/mecanica_style.css">
    <title>MECÁNICA DEL AUTOMÓVIL</title>
</head>
<body>
    <h1>Bienvenido a WETAXI MADRID</h1>
    <p>Somos una empresa de taxis con taller autorizado para revisiones oficiales.</p>
    <p>Ofrecemos precios especiales para TAXI y tenemos ofertas nuevas cada mes.</p>
    <p>En nuestro taller experto para todas las marcas de coches, ofrecemos un mantenimiento y reparaciones asequibles y de máxima calidad.</p>
    <p>Nuestro personal está en formación continua para brindarle el mejor asesoramiento experto en el taller.</p>
    <p>Además, ofrecemos servicios como:</p>
<!--Añadir el evento del click (al leer mas ) y quitar el boton -->
    <section class="toggle-section">
        <div class="toggle-container">
            <h2>Neumáticos</h2>
            <button class="toggle-button">Leer más</button>
            <div class="toggle-content">
            <img src="neumaticos.jpg" alt="Neumáticos">
            <p>En WETAXI MADRID, te ofrecemos una amplia selección de neumáticos de alta calidad para todo tipo de vehículos, siempre al mejor precio.</p>
            </div>
        </div>
    </section>


    <section class="toggle-section">
        <div class="toggle-container">
            <div class="toggle-bar">
                <h2>Limpieza interior</h2>
                <div class="toggle-arrow"></div>
            </div>
            <div class="toggle-content">
                <img src="limpieza-coches-03.jpg" alt="Limpieza interior">
                <p>Nuestro servicio de limpieza interior incluye aspirado y limpieza de tapicería, paneles y cristales para que tu vehículo esté siempre impecable por dentro.</p>
            </div>
        </div>
    </section>


    <section>
    <img src="cuando-cambiar-las-pastillas-de-coche.jpg" alt="Frenos">
    <h2>Frenos</h2>
    <p>En WETAXI MADRID, contamos con un equipo de profesionales que se encargará de revisar y cambiar tus frenos para garantizarte una conducción segura y sin preocupaciones.</p>
    </section>

    <section>
    <img src="pulido faros.jpg" alt="Pulido de faros">
    <h2>Pulido de faros</h2>
    <p>¿Tus faros han perdido transparencia? En WETAXI MADRID, nos encargamos de restaurarlos para que tu vehículo vuelva a lucir como nuevo y puedas conducir con total seguridad.</p>
    </section>

    <section>
    <img src="c700x420.jpg" alt="Limpieza exterior">
    <h2>Limpieza exterior</h2>
    <p>Con nuestro servicio de limpieza exterior, te garantizamos que tu vehículo quedará como el primer día. Limpieza a fondo de carrocería, llantas y cristales para que brille con luz propia.</p>
    </section>

    <section>
    <img src="electricidad.jpg" alt="Electricidad">
    <h2>Electricidad</h2>
    <p>¿Tienes algún problema eléctrico en tu vehículo? En WETAXI MADRID, te ofrecemos un servicio integral de reparación de problemas eléctricos para que no te quedes nunca tirado.</p>
    </section>

    <section>
    <img src="mantenimineto integral 2.jpg" alt="Mantenimiento y revisión">
    <h2>Mantenimiento y revisión</h2>
    <p>En WETAXI MADRID, realizamos todo tipo de mantenimiento y revisión de vehículos para que siempre puedas conducir con total seguridad y confianza en tu coche.</p>
    </section>

    <section>
    <img src="images.jpg" alt="Cambio de aceite y filtros">
    <h2>Cambio de aceite y filtros</h2>
    <p>Un buen mantenimiento del motor es imprescindible para el correcto funcionamiento de tu vehículo. En WETAXI MADRID, te ofrecemos el servicio de cambio de aceite y filtros para mantener tu coche en perfectas condiciones.</p>
    </section>

    <p>Contáctenos para obtener más información y reservar su cita en nuestro taller.</p>

    <script>
        const toggleBars = document.querySelectorAll('.toggle-bar');

        toggleBars.forEach(bar => {
        bar.addEventListener('click', () => {
            const container = bar.parentNode;
            const content = container.querySelector('.toggle-content');
            const arrow = bar.querySelector('.toggle-arrow');

            container.classList.toggle('active');
            content.classList.toggle('active');
            arrow.classList.toggle('active');
        });
        });

    </script>
    
</body>
</html>