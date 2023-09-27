<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Datos Médicos</title>
    <link rel="shortcut icon" href="./img/logohmini.png">
    <link href="./css/consultaDatosPaciente.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <h1>Datos Médicos</h1>
    <?php
    include("conexion.php");
    
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }
    
    // Obtener el DNI ingresado por el usuario
    $dni = $_POST["dni"];
    
    // Consultar la base de datos para obtener los datos médicos
    $consulta = "SELECT * FROM paciente WHERE dni = '$dni'";
    $resultado = mysqli_query($conexion, $consulta);
    
    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        echo "Nombre: " . $fila["nombre"] . "<br>";
        echo "Apellido: " . $fila["apellido"] . "<br>";
        echo "Edad: " . $fila["edad"] . "<br>";
        echo "Telefono: " . $fila["telefono"] . "<br>";
        echo "Sexo: " . $fila["sexo"] . "<br>";
        echo "Direccion: " . $fila["direccion"] . "; " . $fila["localidad"] . ", " . $fila["provincia"] . "<br>";
        echo "Fecha de nacimiento: " . $fila["fecha_nacimiento"] . "<br>";
        // Agrega más campos según tu base de datos
    } else {
        echo "No se encontraron datos para el DNI ingresado.";
    }
    
    // Cierra la conexión a la base de datos
    mysqli_close($conexion);
    ?>
</body>
</html>