<?php
// Conexión a la base de datos (cambia estas credenciales según tu configuración)

include("conexion.php");

// Obtener datos del formulario
$telefono = $_POST['telefono'];
$duracion = $_POST['duracion'];
$tipo = $_POST['tipo'];
$atendido = $_POST['atendido'];

// Insertar los datos en la tabla de llamadas
$sql = "INSERT INTO llamadas (telefono, duracion, tipo, atendido) VALUES ('$telefono', '$duracion', '$tipo', '$atendido')";

if ($conexion->query($sql) === TRUE) {
    echo "Llamada registrada con éxito";
} else {
    echo "Error al registrar la llamada: " . $conexion->error;
}

$conexion->close();
?>
