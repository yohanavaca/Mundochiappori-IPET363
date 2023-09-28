<?php
    include("conexion.php");

//trae los datos del formulario

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $area = $_POST['area'];
    $dni = $_POST['dni'];

//inserta los datos

    $sql = "INSERT INTO medico VALUES(NULL,'$nombre','$apellido', '$telefono', '$area', '$dni')";
    
//si se pueden ingresar, deriva a la pagina principal

    if ($conexion->query($sql) === TRUE) {
        header("location:administrador.php");
    } else {
        echo "Error al guardar la ficha médica: " . $conexion->error;
    }

//cierra la conexion
    
    $conexion->close();
    ?>
?>
