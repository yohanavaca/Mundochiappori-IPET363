<!DOCTYPE html>
<html>
<head>
    <title>Registro de Llamadas</title>
</head>
<body>
    <h1>Registro de Llamadas</h1>
    <?php
    include("conexion.php");

    // Verifica si se ha enviado el formulario de filtrado
    if (isset($_POST['filtro'])) {
        $filtro = $_POST['filtro'];

// Modifica la consulta SQL para aplicar el filtro o mostrar todo
if ($filtro === 'todo') {
    $sql = "SELECT * FROM llamadas";
} else {
    $sql = "SELECT * FROM llamadas WHERE tipo = '$filtro'";
}
} else {
// Consulta SQL para obtener todas las llamadas
$sql = "SELECT * FROM llamadas";
}

      

    // Ejecuta la consulta
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Numero</th><th>Duración</th><th>Tipo</th><th>Atendido</th><th>Fecha y Hora</th></tr>";
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id_llamada"]."</td>";
            echo "<td>".$row["telefono"]."</td>";
            echo "<td>".$row["duracion"]." minutos</td>";
            echo "<td>".$row["tipo"]."</td>";
            echo "<td>".$row["atendido"]."</td>";
            echo "<td>".$row["fecha_hora"]."</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No hay llamadas registradas.";
    }
    ?>

    <!-- Formulario de filtrado -->
    <form method="POST" action="">
        <label>Filtrar por Tipo:</label>
        <button type="submit" name="filtro" value="emergencia">Emergencia</button>
        <button type="submit" name="filtro" value="normal">Normal</button>
        <button type="submit" name="filtro" value="todo">Todo</button>
    </form>
</body>
</html>
