<?php
    include("conexion.php");
    $nombre_paciente = $_POST['nombre_paciente'];
    $motivo = $_POST['motivo'];
    $urgencia = $_POST['urgencia'];
    
    $query = "INSERT INTO llamadas (nombre_paciente, motivo, urgencia) VALUES('$nombre_paciente', '$motivo', '$urgencia')";
    $resultado= $conexion->query($query);

    if($resultado){
        header ("location:registrado.php");
    }
    else{
        echo "no se inserto";
    }

?>