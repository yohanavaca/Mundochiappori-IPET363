<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Datos Médicos</title>
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
        echo "Nombre del Paciente: " . $fila["nombre_paciente"] . "<br>";
        echo "Fecha de Consulta: " . $fila["fecha_consulta"] . "<br>";
        echo "Diagnóstico: " . $fila["diagnostico"] . "<br>";
        // Agrega más campos según tu base de datos
    } else {
        echo "No se encontraron datos para el DNI ingresado.";
    }
    
    // Cierra la conexión a la base de datos
    mysqli_close($conexion);
    ?>
</body>
</html>
