<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <!-- icons -->
    <link rel="stylesheet" href="assets/icons/bootstrap-icons.css">
</head>

<body>
<?php
    include_once 'includes/conexion.php';
    $conexion = new conexion();
    $sql = $conexion -> connect() -> prepare("SELECT * FROM conductores");
    $sql -> execute();
    $result = $sql -> fetchAll();
    foreach($result as $row){
        echo $row['dni'] . "<br>";
    }
?>
</body>

</html>