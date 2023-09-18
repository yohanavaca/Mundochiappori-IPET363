<?php
    include("conexion.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $direccion = $_POST['direccion'];
    $localidad = $_POST['localidad'];
    $provincia = $_POST['provincia'];
    $obraSocial = $_POST['obraSocial'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    $sql = "INSERT INTO paciente VALUES(NULL,'$nombre','$apellido', '$dni', '$edad', '$telefono', '$sexo', '$direccion', '$localidad', '$provincia', '$obraSocial', '$fecha_nacimiento')";
    

    if ($conexion->query($sql) === TRUE) {
        header("location:administrador.php");
    } else {
        echo "Error al guardar la ficha médica: " . $conexion->error;
    }
    
    $conexion->close();
    ?>
?>