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
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/subheader.css">
    <title>EQIPAMIENTO</title>
</head>
<body>
    <?php
        echo $componentes->header();

        echo $componentes ->subheader("EQIPAMIENTO","¿Necesitas ayuda con tu licencia de Auto- taxi?",
        "En WETAXI MADRID disponemos de un departamento especializado para que no tengas que preocuparte de nada. ",
        "Departamento labora, fiscal y administarivo, para cubrir todas las necesidades como autónomo o empresa. ", "../assets/img/taximetro.jpg");
    ?>

    <!--taximetro(TX80 SkyGlass: Breaking the Limits,TX40, TX52, TXD70: ), luminoso(TL70B,Módulo luminoso Montero Morón), bucle magnetico, Bluetooth GPS BG40, PIN PAD, Impresora IR32 Equipo de Seguridad TC60E-->
</body>
</html>