<?php
    include("conexion.php");

//trae los datos del formulario
    
    $medicoAsignado = $_POST['medicoAsignado'];
    $diagnostico = $_POST['diagnostico'];
    $tratamiento = $_POST['tratamiento'];
    $observaciones = $_POST['observaciones'];
    $dni = $_POST['dni'];

//inserta los datos    

    $sql = "INSERT INTO reporte VALUES(NULL, '$medicoAsignado', '$diagnostico', '$tratamiento', '$observaciones', '$dni')";
    echo ($sql);

//en el caso que se inserten, dirige a otra pagina

    if ($conexion->query($sql) === TRUE) {
        header("Location:pacientesRegistrados.php");
    } else {
        echo "Error al guardar la ficha médica: " . $conexion->error;
    }

//cierra la conexion
    
    $conexion->close();
    ?>
