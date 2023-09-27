<?php
// Conectar a la base de datos (debes tener tu propio archivo de conexión)
include("conexion.php");

// Verificar si se proporcionó un ID válido en la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_paciente = $_GET['id'];

    // Consulta SQL para obtener los datos del dato específico
    $sql = "SELECT * FROM paciente WHERE id_paciente = $id_paciente";
    $result = $conexion->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Mostrar el formulario de modificación
        ?>
        <h1>Modificar Datos</h1>
        <form action="guardar_modificacion.php" method="post">

        <input type="hidden" name="id_paciente" value="<?php echo $row['id_paciente']; ?>"><br><br>

        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required><br><br>

        <label for="apellido">apellido:</label>
        <input type="text" id="apellido" name="apellido"value="<?php echo $row['apellido']; ?>" required><br><br>

        <label for="edad">edad:</label><br>
        <input type="int" id="edad" name="edad"value="<?php echo $row['edad']; ?>" required><br><br>


        <label for="telefono">telefono:</label><br>
        <input type="int" id="telefono" name="telefono" value="<?php echo $row['telefono']; ?>"required><br><br>

        <label for="direccion">direccion:</label><br>
        <input type="text" id="direccion" name="direccion"value="<?php echo $row['direccion']; ?>" required><br><br>


        <label for="localidad">localidad:</label><br>
        <input type="text" id="localidad" name="localidad"value="<?php echo $row['localidad']; ?>" required><br><br>


        <label for="provincia">provincia:</label><br>
        <input type="text" id="provincia" name="provincia"value="<?php echo $row['provincia']; ?>" required><br><br>


        <label for="fechaNacimiento">fechaNacimiento:</label><br>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']; ?>"required><br><br>

        <label for="dni">dni:</label><br>
        <input type="text" id="dni" name="dni" value="<?php echo $row['dni']; ?>"required><br><br>

        <label for="sexo">sexo</label>
     
        <select name="sexo" id="sexo">
            <option value="femenino">femenino</option>
            <option value="masculino">masculino</option>
            <option value="otro">otro</option>

        </select><br><br>



        <label for="obraSocial">¿Tiene obra social?</label><br>
        <select name="obraSocial" id="obraSocialSelect">
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select><br><br>

        <label for="obraSocialTexto" id="obraSocialTextoLabel" style="display:none;">Nombre de la obra social:</label>
        <input type="text" id="obraSocialTexto" name="obraSocialTexto" style="display:none;"value="<?php echo $row['obraSocialTexto']; ?>"><br><br>

        <input type="submit" value="Guardar Cambios">
        
    </form>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
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
    });
    </script>

    </form>
      
            <!-- Agregar más campos para otros datos a modificar -->
            
        </form>
        <?php
    } else {
        echo "No se encontraron datos para modificar.";
    }
} else {
    echo "ID de dato no válido.";
}

// Cierra la conexión
$conexion->close();
?>