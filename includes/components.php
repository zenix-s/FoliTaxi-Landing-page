<?php

class componentes{
    function header(){
        return '
        <header>
        <div class="logo">
            <img src="../assets/img/logo.png" alt="logo">
        </div>
        <div class="navegacion">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php">Mecanica</a></li>
                <li><a href="index.php">Reservas</a></li>
                <li><a href="index.php">asesoria</a></li>
            </ul>
        </div>
        <div class="sesion">
            <ul>
                <li><a href="index.php">Iniciar Sesion</a></li>
                <li><a href="index.php">Registrarse</a></li>
            </ul>
        </div>
    </header>
    ';
    }
}
