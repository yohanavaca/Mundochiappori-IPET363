<?php
    include("conexion.php");
    
//trae el dato del formulario    
    
    $area = $_POST['area'];

//inserta el dato

    $query = "INSERT INTO area (area) VALUES('$area')";
    $resultado= $conexion->query($query);

//si funciona, redirige a la pagina del admin

    if($resultado){
        header ("location:administrador.php");
    }
    else{
        echo "no se inserto";
    }

?>
