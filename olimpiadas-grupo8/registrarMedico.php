<!DOCTYPE html>
<html>
<head>
    <title>Ficha del Medico</title>
    <link href="./css/paciente.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
<?php
include("cabecera.php");
?>
    
    <h1><span class="badge bg-secondary , container-fluid">Ficha del medico</span></h1>

    <form action="consultaRegistrarMedico.php" method="post">
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="telefono">telefono:</label><br>
        <input type="int" id="telefono" name="telefono" required><br><br>

        <label for="area">area:</label><br>
        <input type="text" id="area" name="area" required><br><br>

        <label for="dni">dni:</label><br>
        <input type="int" id="dni" name="dni" required><br><br>

        <input type="submit" value="Guardar Ficha">
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