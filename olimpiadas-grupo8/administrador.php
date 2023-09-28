<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="shortcut icon" href="./img/logohmini.png">
    <link href="./css/admin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
<div>
    <?php
    include("cabecera.php");
    ?>
</div>
    
<div class="container-fluid">

    
    <header>
    <h1>¡HOLA ADMINISTRADOR!</h1>
    </header>
    
    <!--Barra de navegacion-->
    
    <div>
    <div class="botones">
            
            <a href="paciente.php">
                <button type="button" class="btn btn-outline-danger" value="Acceder">REGISTRAR PACIENTE</button>
            </a>
            <a href="registrarMedico.php">
                <button type="button" class="btn btn-outline-danger" value="Acceder">REGISTRAR MÉDICO/ENFERMERO</button>
            </a>  
            <a href="area.php">   
                <button type="button" class="btn btn-outline-danger" value="Acceder">REGISTRAR ÁREA</button>
            </a>
            <a href=registroLlamadas.php>
                <button type="button" class="btn btn-outline-danger" value="Acceder">REGISTROS DE LLAMADAS</button>
            </a>
            
            </div>
    </div>

    
        <img src="./img/logoh.png" alt="logoh">

    

        
        
    </div>
</body>
</html>
