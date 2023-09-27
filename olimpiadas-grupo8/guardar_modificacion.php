<?php
// Conectar a la base de datos (debes tener tu propio archivo de conexión)
include("conexion.php");

// Verificar si se han enviado datos por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $id_paciente = $_POST['id_paciente'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $localidad = $_POST['localidad'];
    $provincia = $_POST['provincia'];
    $obraSocial = $_POST['obraSocial'];
    $sexo = $_POST['sexo'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $dni = $_POST['dni'];

    // Consulta SQL para actualizar los datos en la base de datos
    $sql = "UPDATE paciente SET 
            
            nombre = '$nombre',
            apellido = '$apellido',
            edad = $edad,
            telefono = $telefono,
            direccion = '$direccion',
            localidad = '$localidad',
            provincia = '$provincia',
            obraSocial = '$obraSocial',
            sexo = '$sexo',
            fecha_nacimiento = '$fecha_nacimiento',
            dni = $dni
            WHERE id_paciente = $id_paciente";

    if ($conexion->query($sql) === TRUE) {
        echo "Los datos se actualizaron correctamente.";
    } else {
        echo "Error al actualizar los datos: " . $conexion->error;
    }
} else {
    echo "No se han recibido datos por POST.";
}

// Cierra la conexión
$conexion->close();

// Redirige al usuario de vuelta a la lista de datos
header("Location: mostrarDatos.php"); 
exit();
?>