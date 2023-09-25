<h1>Lista de Datos</h1>
<link rel="stylesheet" type="text/css" href="estilos.css">


    <?php
    // Conectar a la base de datos (debes tener tu propio archivo de conexión)
    include("conexion.php");

    // Consulta SQL para obtener los datos de la relación
    $sql = "SELECT * FROM dato  WHERE id_dato";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>Edad</th>";
        echo "<th>Teléfono</th>";
        echo "<th>Sexo</th>";
        echo "<th>Dirección</th>";
        echo "<th>Localidad</th>";
        echo "<th>Provincia</th>";
        echo "<th>Obra Social</th>";
        echo "<th>Fecha de Nacimiento</th>";
        echo "<th>DNI</th>";
        
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id_dato'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['apellido'] . "</td>";
            echo "<td>" . $row['edad'] . "</td>";
            echo "<td>" . $row['telefono'] . "</td>";
            echo "<td>" . $row['sexo'] . "</td>";
            echo "<td>" . $row['direccion'] . "</td>";
            echo "<td>" . $row['localidad'] . "</td>";
            echo "<td>" . $row['provincia'] . "</td>";
            echo "<td>" . $row['obraSocial'] . "</td>";
            echo "<td>" . $row['fechaNacimiento'] . "</td>";
            echo "<td>" . $row['dni'] . "</td>";
            echo "</tr>";
            echo "<td><a href='modificar.php?id=" . $row['id_dato'] . "'>Modificar</a></td>";
            echo "<td><a href='Eliminar.php?id=" . $row['id_dato'] . "'>Eliminar</a></td>";
        }

        echo "</table>";
    } else {
        echo "No hay datos para mostrar.";
    }

    // Cierra la conexión
    $conexion->close();
    ?>
    
 
   


            
            
    </body>
    </html>
    <?php




