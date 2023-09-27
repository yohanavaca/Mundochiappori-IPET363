<?php
// Conectar a la base de datos (debes tener tu propio archivo de conexión)
include("conexion.php");

// Consulta SQL para obtener los datos de la relación
$sql = "SELECT * FROM paciente d, reporte r WHERE d.dni= r.dni";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // Nombre del archivo CSV
    $filename = "datos.csv";

    // Encabezados para el archivo CSV
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    // Abrir el archivo CSV para escritura
    $output = fopen('php://output', 'w');

    // Escribir los encabezados
    fputcsv($output, array('ID', 'Nombre', 'Apellido', 'Edad', 'Teléfono', 'Sexo', 'Dirección', 'Localidad', 'Provincia', 'Obra Social', 'Fecha de Nacimiento', 'DNI', 'ID Reporte', 'Observaciones', 'Diagnóstico', 'Médico Asignado'));

    // Recorrer y escribir los datos en el archivo CSV
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, $row);
    }

    // Cerrar el archivo CSV
    fclose($output);
} else {
    echo "No hay datos para mostrar.";
}

// Cierra la conexión
$conexion->close();
?>