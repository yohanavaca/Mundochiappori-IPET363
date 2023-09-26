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
    $obraSocialTexto = isset($_POST["obraSocialTexto"]) ? $_POST["obraSocialTexto"] : "";
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $dni = $_POST['dni'];
    
    if ($obraSocial === "no") {
        $obraSocialTexto = "";
    }
    

    $sql = "INSERT INTO dato VALUES(NULL,'$nombre','$apellido', '$edad', '$telefono', '$sexo', '$direccion', '$localidad', '$provincia', '$obraSocial', '$obraSocialTexto', '$fechaNacimiento', '$dni')";
    echo ($sql);
    if ($conexion->query($sql) === TRUE) {
        header("location:nada.php");
    } else {
        echo "Error al guardar la ficha médica: " . $conn->error;
    }
    
    $conn->close();
    ?>
