<?php
// Conectar a la base de datos (debes tener tu propio archivo de conexión)
include("conexion.php");

// Verificar si se han enviado datos por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $id_dato = $_POST['id_dato'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $localidad = $_POST['localidad'];
    $provincia = $_POST['provincia'];
    $obraSocial = $_POST['obraSocial'];
    $sexo = $_POST['sexo'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $dni = $_POST['dni'];

    // Consulta SQL para actualizar los datos en la base de datos
    $sql = "UPDATE dato SET 
            
            nombre = '$nombre',
            apellido = '$apellido',
            edad = $edad,
            telefono = $telefono,
            direccion = '$direccion',
            localidad = '$localidad',
            provincia = '$provincia',
            obraSocial = '$obraSocial',
            sexo = '$sexo',
            fechaNacimiento = '$fechaNacimiento',
            dni = $dni
            WHERE id_dato = $id_dato";

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
