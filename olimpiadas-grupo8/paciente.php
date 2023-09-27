<!DOCTYPE html>
<html>
<head>
    <title>Ficha del Paciente</title>
    <link rel="shortcut icon" href="./img/logohmini.png">
    <link href="./css/paciente.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

<?php
include("cabecera.php");
?>

    <h1><span class="badge bg-secondary , container-fluid">Ficha del paciente</span></h1>

    <form class=container-fluid action="consultaPaciente.php" method="post">
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="dni">dni:</label>
        <input type="int" id="dni" name="dni" required><br><br>

        <label for="edad">edad:</label><br>
        <input type="int" id="edad" name="edad" required><br><br>


        <label for="telefono">telefono:</label><br>
        <input type="int" id="telefono" name="telefono" required><br><br>

        <label for="sexo">sexo</label>
     
     <select name="sexo" id="sexo">
         <option value="femenino">femenino</option>
         <option value="masculino">masculino</option>
         <option value="otro">otro</option>

     </select><br><br>

        <label for="direccion">direccion:</label><br>
        <input type="text" id="direccion" name="direccion" required><br><br>


        <label for="localidad">localidad:</label><br>
        <input type="text" id="localidad" name="localidad" required><br><br>


        <label for="provincia">provincia:</label><br>
        <input type="text" id="provincia" name="provincia" required><br><br>

        <label for="obraSocial">¿Tiene obra social?</label><br>
        <select name="obraSocial" id="obraSocialSelect">
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select><br><br>

        <label for="obraSocialTexto" id="obraSocialTextoLabel" style="display:none;">Nombre de la obra social:</label>
        <input type="text" id="obraSocialTexto" name="obraSocialTexto" style="display:none;"><br><br>

        

        <label for="fechaNacimiento">fechaNacimiento:</label><br>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>
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

        <input class="btn btn-primary" type="submit" value="Guardar Ficha">
    </form>

    <script>
        var obraSocialSelect = document.getElementById("obraSocialSelect");
        var obraSocialTextoLabel = document.getElementById("obraSocialTextoLabel");
        var obraSocialTexto = document.getElementById("obraSocialTexto");

        obraSocialSelect.addEventListener("change", function () {
            if (obraSocialSelect.value === "no") {
                obraSocialTextoLabel.style.display = "none";
                obraSocialTexto.style.display = "none";
            } else {
                obraSocialTextoLabel.style.display = "block";
                obraSocialTexto.style.display = "block";
            }
        });
    </script>

       

        
    </form>
</body>
</html>