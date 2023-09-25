<!DOCTYPE html>
<html>
<head>
    <title>Ficha del Paciente</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="tu-archivo-de-estilo.css">

    
    <h1>Ficha del Paciente</h1>
    

    <form action="guardarDatos(f).php" method="post">
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="edad">edad:</label><br>
        <input type="number" id="edad" name="edad" required><br><br>


        <label for="telefono">telefono:</label><br>
        <input type="int" id="telefono" name="telefono" required><br><br>

        <label for="direccion">direccion:</label><br>
        <input type="text" id="direccion" name="direccion" required><br><br>


        <label for="localidad">localidad:</label><br>
        <input type="text" id="localidad" name="localidad" required><br><br>


        <label for="provincia">provincia:</label><br>
        <input type="text" id="provincia" name="provincia" required><br><br>


        <label for="fechaNacimiento">fechaNacimiento:</label><br>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" required><br><br>

        <label for="dni">dni:</label><br>
        <input type="text" id="dni" name="dni" required><br><br>

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
        <input type="text" id="obraSocialTexto" name="obraSocialTexto" style="display:none;"><br><br>

       
        
        <input type="submit" value="Guardar Ficha">

       
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
</body>
</html>
