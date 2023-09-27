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
    $obraSocialTexto = isset($_POST["obraSocialTexto"]) ? $_POST["obraSocialTexto"] : "";
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $medicoAsignado= $_POST['medicoAsignado'];

    if($obraSocial==="no") {
        $obraSocialTexto = "";
    }

    $sql = "INSERT INTO paciente VALUES (NULL,'$nombre','$apellido', '$dni', '$edad', '$telefono', '$sexo', '$direccion', '$localidad', '$provincia', '$obraSocial', '$obraSocialTexto', '$fecha_nacimiento',  '$medicoAsignado')";
    echo ($sql);

    if ($conexion->query($sql) === TRUE) {
        header("location:mostrarDatos.php");
    } else {
        echo "Error al guardar la ficha médica: " . $conexion->error;
    }
    
    $conexion->close();
    ?>
