<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form method="post" action="registrosLlamadas.php">
        Nombre Del paciente: <input type="text" name="nombre_paciente" id="nombre_paciente" value=""><br><br>
        Motivo: <input type="text" name="motivo" id="motivo" value=""><br><br>
       
        <h2>Urgencia</h2>
        <label for="urgencia">Urgencia:</label>
        <select id="urgencia" name="urgencia">

            <option value="Si">Si</option>
            <option value="No">No</option>

        </select><br>


        <input type="submit" name="submit" value="Enviar">
        

    </form>

</body>
</html>