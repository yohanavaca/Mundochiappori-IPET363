<!DOCTYPE html>
<html>
<head>
    <title>Registro de Llamadas</title>
    
</head>
<body>
    <h1>Registro de Llamadas</h1>
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


        <!--<textarea name="comentario" rows="4" cols="50"></textarea><br>-->

        <input type="submit" value="Guardar Llamada">

    </form>
    <?php
    include("verLlamadas.php");
    ?>
</body>
</html>
