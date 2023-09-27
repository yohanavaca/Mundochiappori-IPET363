<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area</title>
    <link rel="shortcut icon" href="./img/logohmini.png">
    <link href="./css/paciente.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
<?php
include("cabecera.php");
?>
    
        <form action ="guardarArea.php" method="POST" enctype="multipart/form-data">
            <input type="text" REQUIRED name="area" placeholder="Area" value=""/>
            <input type="submit"value="aceptar"/>
        </form>
    
</body>
</html>