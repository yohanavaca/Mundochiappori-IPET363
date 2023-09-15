<?php
    include("conexion(r).php");

    $observaciones = $_POST['observaciones'];
    $diagnostico = $_POST['diagnostico'];
    $medicoAsignado = $_POST['medicoAsignado'];
    $dni = $_POST['dni'];

    

    $sql = "INSERT INTO reporte VALUES(NULL,'$observaciones','$diagnostico', '$medicoAsignado', '$dni')";
    echo ($sql);

    if ($conexion->query($sql) === TRUE) {
        echo "si se pudo conectar";
    } else {
        echo "Error al guardar la ficha médica: " . $conexion->error;
    }
    
    $conexion->close();
    ?>
