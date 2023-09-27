<!DOCTYPE html>
<html>
<head>
    <title>Lista de Datos</title>
    <link rel="shortcut icon" href="./img/logohmini.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            display: block;
            margin-top: 10px;
            text-align: center;
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            text-decoration: none;
        }

        a:hover {
            background-color: #0056b3;
        }


    </style>
</head>
<body>
    <h1>Lista de Datos</h1>

    <?php
    // Conectar a la base de datos (debes tener tu propio archivo de conexión)
    include("conexion.php");

    // Consulta SQL para obtener los datos de la relación
    $sql = "SELECT * FROM paciente d, reporte r WHERE d.dni= r.dni";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>DNI</th>";
        echo "<th>Edad</th>";
        echo "<th>Telefono</th>";
        echo "<th>Sexo</th>";
        echo "<th>Direccion</th>";
        echo "<th>Obra Social</th>";
        echo "<th>Fecha de Nacimiento</th>";
        echo "<th>ID Reporte</th>";
        echo "<th>Medico Asignado</th>";
        echo "<th>Diagnóstico</th>";
        echo "<th>Tratamiento</th>";
        echo "<th>Observaciones</th>";
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id_paciente'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['apellido'] . "</td>";
            echo "<td>" . $row['dni'] . "</td>";
            echo "<td>" . $row['edad'] . "</td>";
            echo "<td>" . $row['telefono'] . "</td>";
            echo "<td>" . $row['sexo'] . "</td>";
            echo "<td>" . $row["direccion"] . ", " . $row["localidad"] . ", " . $row["provincia"] . "</td>";
            echo "<td>" . $row['obraSocial'] . "</td>";
            echo "<td>" . $row['fecha_nacimiento'] . "</td>";

            echo "<td>" . $row['id_reporte'] . "</td>";
            echo "<td>" . $row['medicoAsignado'] . "</td>";
            echo "<td>" . $row['diagnostico'] . "</td>";
            echo "<td>" . $row['tratamiento'] . "</td>";
            echo "<td>" . $row['observaciones'] . "</td>";

           
            echo "</tr>";
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