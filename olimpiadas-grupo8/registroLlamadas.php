<!DOCTYPE html>
<html>
<head>
    <title>Registro de Llamadas</title>
    <link rel="shortcut icon" href="./img/logohmini.png">
    <link href="./css/llamadas.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
<?php
include("cabecera.php");

?>
    <div class="container-fluid">
    <h1>Registro de Llamadas</h1>
    
<!--formulario para cargar las llamadas-->    
    
    <form action="guardarLlamada.php" method="post">

        <label for="telefono">Número de Teléfono:</label>
        <input type="int" name="telefono" required><br>

        <label for="duracion">Duración (minutos):</label>
        <input type="number" name="duracion" required><br>

        <label for="tipo">Tipo:</label><br>
     
        <select name="tipo" id="tipo">
            <option value="emergencia">emergencia</option>
            <option value="normal">normal</option>
         </select><br><br>

         <label for="atendido">Atendido:</label><br>
     
        <select name="atendido" id="atendido">
             <option value="si">si</option>
             <option value="no">no</option>
        </select><br><br>

       
        <label for="area">Area</label>
        <select id="area" name="area" required>
    
    <?php
   //trae las areas desde la base
   $conexion = mysqli_connect("localhost", "id21316587_val","Aleli1918_","id21316587_datos_paciente")or exit ("no se puede conectar");
   $sql = "SELECT * FROM area";
   $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row["id_area"] . '">' . $row["area"] . '</option>';    
        }
    } else {
        echo '<option value="">No hay areas registrados</option>';
    }
    ?>
</select><br><br>


        <label for="origen">Origen:</label><br>
     
        <select name="origen" id="origen">
             <option value="cama">cama</option>
             <option value="baño">baño</option>
        </select><br><br>

        <input type="submit" value="Guardar Llamada">

    </form>
    <?php
     include("graficoLlamadas.php");
    ?>

    <?php
    include("verLlamadas.php");
    ?>
    </div>
</body>
</html>
