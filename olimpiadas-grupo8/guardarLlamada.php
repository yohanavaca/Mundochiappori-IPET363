<?php
// Conexión a la base de datos (cambia estas credenciales según tu configuración)

include("conexion.php");

// Obtener datos del formulario
$telefono = $_POST['telefono'];
$duracion = $_POST['duracion'];
$tipo = $_POST['tipo'];
$atendido = $_POST['atendido'];
$area = $_POST['area'];
$origen = $_POST['origen'];

// Insertar los datos en la tabla de llamadas
$sql = "INSERT INTO llamadas (telefono, duracion, tipo, atendido, area, origen) VALUES ('$telefono', '$duracion', '$tipo', '$atendido', '$area', '$origen')";
echo ($sql);
if ($conexion->query($sql) === TRUE) {
    echo "Llamada registrada con éxito";
    header("location:verLlamadas.php");
} else {
    echo "Error al registrar la llamada: " . $conexion->error;
}

// Menu desplegable



$conexion->close();
?>
