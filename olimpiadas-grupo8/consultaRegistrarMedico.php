<?php
    include("conexion.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $area = $_POST['area'];
    $dni = $_POST['dni'];

    $sql = "INSERT INTO medico VALUES(NULL,'$nombre','$apellido', '$telefono', '$area', '$dni')";
    

    if ($conexion->query($sql) === TRUE) {
        header("location:administrador.php");
    } else {
        echo "Error al guardar la ficha médica: " . $conexion->error;
    }
    
    $conexion->close();
    ?>
?>