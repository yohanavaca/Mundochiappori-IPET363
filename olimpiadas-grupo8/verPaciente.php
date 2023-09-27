<!DOCTYPE html>
<html>
<head>
    <title>Pacientes</title>
    <link rel="shortcut icon" href="./img/logohmini.png">
</head>
<body>
    <h1>Registro de pacientes</h1>
    <?php
    include("conexion.php");

  
    // Consulta SQL para obtener todas las llamadas
    $sql = "SELECT * FROM paciente";
   
    // Ejecuta la consulta
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nombre y apellido</th><th>Edad</th><th>Telefono</th>><th>Sexo</th><th>Direcion</th><th>Fecha de nacimiento</th></tr>";
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_paciente"] . "</td>";
            echo "<td>" . $row["nombre"] . "," . $row["apellido"] .  "</td>";
            echo "<td>" . $row["edad"] . "</td>";
            echo "<td>" . $row["telefono"] . "</td>";
            echo "<td>" . $row["sexo"] . "</td>";
            echo "<td>" . $row["direccion"] . ", " . $row["localidad"] . ", " . $row["provincia"] . "</td>";
            echo "<td>" . $row["fecha_nacimiento"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No hay areas registradas.";
    }
    ?>


</body>
</html>
