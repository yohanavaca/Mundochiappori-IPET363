<!DOCTYPE html>
<html>
<head>
    <title>Area</title>
</head>
<body>
    <h1>Area</h1>
    <?php
    include("conexion.php");

  
        // Consulta SQL para obtener todas las llamadas
        $sql = "SELECT * FROM area";
    

   

    // Ejecuta la consulta
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Area</th></tr>";
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id_area"]."</td>";
            echo "<td>".$row["area"]."</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No hay areas registradas.";
    }
    ?>


</body>
</html>
