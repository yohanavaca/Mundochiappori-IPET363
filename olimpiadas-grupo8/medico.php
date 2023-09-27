<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
    <link rel="shortcut icon" href="./img/logohmini.png">
    <link href="./css/medico.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    
    <h1>Ingrese su DNI</h1>
    <form action="consultaMedico.php" method="POST">
        <label for="dni">DNI:</label>
        <input class="form-control me-2" type="text" name="dni" id="dni" required>
        <input class="btn btn-danger" type="submit" value="Consultar">
    </form>
    
</body>
</html>