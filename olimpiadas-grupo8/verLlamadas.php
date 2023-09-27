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

    

    if (isset($_POST['filtro_origen'])) {
        $filtro_origen = $_POST['filtro_origen'];

        // Modifica la consulta SQL para aplicar el filtro o mostrar todo
        if ($filtro_origen === 'todo') {
            $sql = "SELECT * FROM llamadas";
        } else {
            $sql = "SELECT * FROM llamadas WHERE origen = '$filtro_origen'";
        }
    } else {
        // Consulta SQL para obtener todas las llamadas
        $sql = "SELECT * FROM llamadas";
    }

    if (isset($_POST['filtro_fecha'])) {
        $fecha_filtro = $_POST['fecha_filtro'];
    
        // Modifica la consulta SQL para aplicar el filtro por fecha
        $sql = "SELECT * FROM llamadas WHERE DATE(fecha_hora) = '$fecha_filtro'";
    }

  

   

    // Ejecuta la consulta
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Numero</th><th>Duración</th><th>Tipo</th><th>Atendido</th><th>Fecha y Hora</th><th>Id_area</th><th>Origen</th></tr>";
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id_llamada"]."</td>";
            echo "<td>".$row["telefono"]."</td>";
            echo "<td>".$row["duracion"]." minutos</td>";
            echo "<td>".$row["tipo"]."</td>";
            echo "<td>".$row["atendido"]."</td>";
            echo "<td>".$row["fecha_hora"]."</td>";
            echo "<td>".$row["area"]."</td>";
            echo "<td>".$row["origen"]."</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No hay llamadas registradas.";
    }
    ?>

    <!-- Formulario de filtrado -->
    <form method="POST" action="">
        <label>Filtrar por Origen del llamado:</label>
        <button type="submit" name="filtro_origen" value="baño">Baño</button>
        <button type="submit" name="filtro_origen" value="cama">Cama</button>
        <button type="submit" name="filtro" value="todo">Todo</button>
       
    </form>

    <!--FORMULARIO POR AREA-->
    <form method="POST" action="">
    <label>Filtrar por AREA:</label>
    <button type="submit" value="area" name="area">Area</button>
        <select id="area" name="area" required>
    <?php
   // $sql = "SELECT * FROM `medico`";
   $conexion = mysqli_connect("localhost", "root","","datos_paciente")or exit ("no se puede conectar");
   $sql = "SELECT * FROM area";
   $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row["id_area"] . '">' . $row["area"] . '</option>';    
        }
    } else {
        echo '<option value="">No hay areas registrados</option>';
    }

    if (isset($_POST['area'])) {
        $area = $_POST['area'];
    
        // Modifica la consulta SQL para aplicar el filtro por fecha
        $sql = "SELECT * FROM llamadas WHERE area = '$area'";
    }

    ?>
</select><br><br>

    </form>
        <!-- Formulario de filtrado por fecha -->
    <form method="POST" action="">
        <label>Filtrar por Fecha:</label>
        <input type="date" name="fecha_filtro">
        <button type="submit" name="filtro_fecha" value="filtrar_fecha">Filtrar</button>

    </form>

        
   
</body>
</html>
