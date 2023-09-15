<?php
    include("conexion.php");
    $area = $_POST['area'];
    
    $query = "INSERT INTO area (area) VALUES('$area')";
    $resultado= $conexion->query($query);

    if($resultado){
        header ("location:registrado.php");
    }
    else{
        echo "no se inserto";
    }

?>