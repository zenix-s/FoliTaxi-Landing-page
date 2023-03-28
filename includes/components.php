<?php

class componentes
{
    // Función encargada de generar el header de la página

    function header()
    {
        return '
        <header>
        <div class="logo">
            <img src="../assets/img/logo.png" alt="logo">
        </div>
        <div class="navegacion">
            <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="mecanica.php">Mecanica</a></li>
                <li><a href="reservas.php">Reservas</a></li>
                <li><a href="asesoria.php">asesoria</a></li>
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
        ';
    }

    // Función encargada de generar el footer de la página
    function footer()
    {
        return '
        <footer>
        <div class="footer_container">
            <div class="logo">
                <img src="../assets/img/logo.png" alt="logo">
            </div>
            <div class="redes">
                <ul>
                    <li><a href="index.php"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="index.php"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="index.php"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="index.php"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="index.php"><i class="bi bi-youtube"></i></a></li>
                    <li><a href="index.php"><i class="bi bi-tiktok"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="nav_options">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php">Mecanica</a></li>
                <li><a href="index.php">Reservas</a></li>
                <li><a href="index.php">asesoria</a></li>
            </ul>
        </div>
        </footer>
        ';
    }
}
