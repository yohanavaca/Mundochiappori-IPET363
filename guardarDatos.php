<?php
    include("conexion.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $direccion = $_POST['direccion'];
    $localidad = $_POST['localidad'];
    $provincia = $_POST['provincia'];
    $obraSocial = $_POST['obraSocial'];
    $fechaNacimiento = $_POST['fechaNacimiento'];

    $sql = "INSERT INTO datos VALUES('$nombre','$apellido', '$edad', '$telefono', '$sexo', '$direccion', '$localidad', '$provincia', '$obraSocial', '$fechaNacimiento')";
    

    if ($conexion->query($sql) === TRUE) {
        echo "Ficha médica guardada exitosamente.";
    } else {
        echo "Error al guardar la ficha médica: " . $conn->error;
    }
    
    $conn->close();
    ?>
?>