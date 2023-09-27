<?php
    include("conexion.php");

    
    $medicoAsignado = $_POST['medicoAsignado'];
    $diagnostico = $_POST['diagnostico'];
    $tratamiento = $_POST['tratamiento'];
    $observaciones = $_POST['observaciones'];
    $dni = $_POST['dni'];

    

    $sql = "INSERT INTO reporte VALUES(NULL, '$medicoAsignado', '$diagnostico', '$tratamiento', '$observaciones', '$dni')";
    echo ($sql);

    if ($conexion->query($sql) === TRUE) {
        header("Location:pacientesRegistrados.php");
    } else {
        echo "Error al guardar la ficha médica: " . $conexion->error;
    }
    
    $conexion->close();
    ?>