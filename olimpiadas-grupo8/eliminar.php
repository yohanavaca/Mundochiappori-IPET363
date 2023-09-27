<?php
// Conectar a la base de datos (debes tener tu propio archivo de conexión)
include("conexion.php");

// Verificar si se proporcionó un ID válido en la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_paciente = $_GET['id'];

    // Consulta SQL para eliminar el registro
    $sql = "DELETE FROM paciente WHERE id_paciente = $id_paciente";

    if ($conexion->query($sql) === TRUE) {
        echo "El registro se eliminó correctamente.";
    } else {
        echo "Error al eliminar el registro: " . $conexion->error;
    }
} else {
    echo "ID de dato no válido.";
}

// Cierra la conexión
$conexion->close();

// Redirige al usuario de vuelta a la lista de datos
header("Location: mostrarDatos.php"); 
exit();
?>