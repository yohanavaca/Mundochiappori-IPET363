
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="shortcut icon" href="./img/logoipet-favicon.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login2.css">
</head>
<body>

    <div class="container-fluid">

        <h1>Inicio de sesion</h1>

        <img src="./img/logoh.png" alt="logoh">

        <form action="validar.php" method="POST">
        <h2>Nombre de usuario</h2>
            <label for="usuario">
                <i class="fas fa-user"></i>
            </label>
        
            <input type="search" name="usuario" placeholder="Usuario" id="usuario" class="form-control me-2" required>
        <h2>Contrasena</h2>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>

            <input type="password" name="password" placeholder="Contraseña" id="password" class="form-control me-2" required>
            <input  class="btn btn-outline-danger" type="submit" value="Iniciar">
        </form>

    </div>
    

</body>



