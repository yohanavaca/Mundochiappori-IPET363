<!DOCTYPE html>
<html>
<head>
    <title>reporte</title>
</head>
<body>
    
    <link rel="stylesheet" type="text/css" href="styles.css">
    
    <h1>reporte</h1>
    <form action="guardarDatos(r).php" method="post">
        
        <label for="observaciones">observaciones:</label>
        <input type="text" id="observaciones" name="observaciones" required><br><br>

        <label for="diagnostico">diagnostico:</label>
        <input type="text" id="diagnostico" name="diagnostico" required><br><br>

        <label for="medicoAsignado">medico asignado:</label><br>
        <input type="text" id="medicoAsignado" name="medicoAsignado" required><br><br>

        <label for="dni">dni paciente:</label><br>
        <input type="int" id="dni" name="dni" required><br><br>



        <input type="submit" value="enviar reporte">
 