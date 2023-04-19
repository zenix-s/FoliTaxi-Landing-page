<?php
    require_once '../includes/componentes.php';
    $componentes = new componentes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/reservas.css">
    <title>Document</title>
</head>
<body>
    <?php
        echo $componentes -> Header();
    ?>
    
    <main>
        <section class="module-container">
            <h1>Reserva ya tu cita</h1>
            <div class="reservas-container">
                <div class="lista-reservas-container">
                    <div class="lista-reservas">
                        <a href="" class="opcion-reserva">
                            Cambio de tarifa
                        </a>
                        <a href="" class="opcion-reserva">
                            Mecanica
                        </a>
                        <a href="" class="opcion-reserva">
                            Accesorios
                        </a>
                        <a href="" class="opcion-reserva">
                            Limpieza
                        </a>
                    </div>
                </div>
                <div class="descripcion-reservas-container">
                    <div class="seleccion-tipo-reserva">
                        <select name="" id="">
                            <option value="">Cambio de tarifa</option>
                            <option value="">Mecanica</option>
                            <option value="">Accesorios</option>
                            <option value="">Limpieza</option>
                        </select>
                    </div>
                    <div class="descripcion-reserva">
                        <div class="img-reserva">
                            <img src="../assets/img/taxis.png" alt="">
                        </div>
                        <div class="descripcion-reserva">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur earum consequuntur quas est odio labore laboriosam a vero, omnis natus quaerat repellendus inventore quis praesentium itaque. Distinctio ex cupiditate eius?
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="row" id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('all')"> Ver todo </button>
            <button class="btn" onclick="filterSelection('cambioTarifa')"> Cambio de tarifa </button>
            <button class="btn" onclick="filterSelection('taller')"> Taller</button>
            <button class="btn" onclick="filterSelection('accesorios')"> Accesorios </button>
            <button class="btn" onclick="filterSelection('limpieza')"> Limpieza</button>
        </div>
        <!-- Portfolio Gallery Grid -->
        <div class="row">
            <div class="column cambioTarifa">
                <div class="content">
                    <div class="img-reserva">
                        <img src="../assets/img/TX80-El-Taller.jpg" alt="" style="width:250px; height: 100px ;">
                    </div>
                    <div class="tex-reserva">
                        <h4>Cambio de tarifa 2023</h4>
                        <div class="tex-reserva-buttons">
                            <a href="#" class="reserva-buttons" id="slider-anchor">Reservar cita</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column ">
                <div class="content">
                    <div class="img-reserva">
                        <img src="../assets/img/TX80-El-Taller.jpg" alt="" style="width:250px; height: 100px ;">
                    </div>
                    <div class="tex-reserva">
                        <h4></h4>
                        <div class="information-body-buttons">
                            <a href="#" class="information-button" id="slider-anchor">Reservar cita</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column ">
                <div class="content">
                    <div class="img-reserva">
                        <img src="../assets/img/TX80-El-Taller.jpg" alt="" style="width:250px; height: 100px ;">
                    </div>
                    <div class="tex-reserva">
                        <h4></h4>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="column cambioTarifa">
            <div class="content">
                <div class="img-reserva">
                <img src="../assets/img/tx40.jpg" alt="taximetro" style="width:250px; height: 100px ;">
                    </div>
                <div class="tex-reserva">
                <h4>TX40: </h4>
                <p>Un taxímetro compacto con tecnología avanzada, pantalla LED, control de tiempo opcional,
                    conexión Bluetooth con Smart TD, cambio de tarifa automático y código antirrobo.</p>
                </div>
            </div>
            </div>
        </div>
    </main>

    <?php
        echo $componentes -> Footer();
    ?>
    <script src="../assets/js/header.js"></script>
    <script>
    filterSelection("all") // Execute the function and show all columns
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "all") c = "";
      // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    // Show filtered elements
    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
          element.className += " " + arr2[i];
        }
      }
    }

    // Hide elements that are not selected
    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>
</body>
</html>