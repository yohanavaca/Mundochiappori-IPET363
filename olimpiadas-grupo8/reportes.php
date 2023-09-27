<!DOCTYPE html>
<html>
<head>
    <title>reporte</title>
    <link rel="shortcut icon" href="./img/logohmini.png">
    <link href="./css/paciente.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    
    <link rel="stylesheet" type="text/css" href="styles.css">
    
    <h1><span class="badge bg-secondary , container-fluid">Reportes</span></h1>
    <form action="guardarDatos(r).php" method="post">
        
    
    <label for="medicoAsignado">Medico asignado</label><br>
        <select id="medicoAsignado" name="medicoAsignado" required>
    
    <?php
   // $sql = "SELECT * FROM `medico`";
   $conexion = mysqli_connect("localhost", "root","","datos_paciente")or exit ("no se puede conectar");
   $sql = "SELECT * FROM medico";
   $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row["id_medico"] . '">' . $row["nombre"] . ' ' . $row["apellido"] . '</option>';    
        }
    } else {
        echo '<option value="">No hay medicos registrados</option>';
    }
    ?>
</select><br><br>

        <label for="diagnostico">diagnostico:</label>
        <input type="text" id="diagnostico" name="diagnostico" required><br><br>

        <label for="tratamiento">tratamiento:</label>
        <input type="text" id="tratamiento" name="tratamiento" required><br><br>

        <label for="observaciones">observaciones:</label>
        <input type="text" id="observaciones" name="observaciones" required><br><br>

        <label for="dni">dni paciente:</label><br>
        <input type="int" id="dni" name="dni" required><br><br>



        <input type="submit" value="enviar reporte">
 