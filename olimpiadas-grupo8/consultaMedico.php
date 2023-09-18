<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Datos Médicos</title>
</head>
<body>

<?php
 include("menuMedico.php");
?>
    <h1>Datos Médicos</h1>
    <?php
    include("conexion.php");
    ?>
    <?php
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }
    
    
   
    
    // Obtener el DNI ingresado por el usuario
    $dni = $_POST["dni"];
    
    // Consultar la base de datos para obtener los datos médicos
    $consulta = "SELECT * FROM medico WHERE dni = '$dni'";
    $resultado = mysqli_query($conexion, $consulta);
    
    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        echo "Nombre del Mèdico: " . $fila["nombre"] . "<br>";
        echo "Apellido: " . $fila["apellido"] . "<br>";
        echo "Numero de contacto: " . $fila["telefono"] . "<br>";
        echo "Especialidad: " . $fila["area"] . "<br>";
        // Agrega más campos según tu base de datos
    } else {
        echo "No se encontraron datos para el DNI ingresado.";
    }
    
  

    // Cierra la conexión a la base de datos
    mysqli_close($conexion);
    ?>
</body>
</html>