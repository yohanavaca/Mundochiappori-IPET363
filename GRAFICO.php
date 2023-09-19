<!DOCTYPE html>
<html>
<head>
    <title>Registro de Llamadas</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <h1>Registro de Llamadas</h1>
    
    <!-- Formulario de filtrado -->
    <form method="POST" action="">
        <label>Filtrar por Tipo:</label>
        <button type="submit" name="filtro" value="emergencia">Emergencia</button>
        <button type="submit" name="filtro" value="normal">Normal</button>
        <button type="submit" name="filtro" value="todo">Todo</button>
    </form>
    
    <?php
    include("conexion.php");

    // Verifica si se ha enviado el formulario de filtrado
    if (isset($_POST['filtro'])) {
        $filtro = $_POST['filtro'];

        // Modifica la consulta SQL para aplicar el filtro o mostrar todo
        if ($filtro === 'todo') {
            $sql = "SELECT tipo, COUNT(*) as cantidad FROM llamadas GROUP BY tipo";
        } else {
            $sql = "SELECT tipo, COUNT(*) as cantidad FROM llamadas WHERE tipo = '$filtro' GROUP BY tipo";
        }
    } else {
        // Consulta SQL para obtener el recuento de llamadas por tipo
        $sql = "SELECT tipo, COUNT(*) as cantidad FROM llamadas GROUP BY tipo";
    }

    // Ejecuta la consulta
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        $datos = array();
        $datos[] = ['Tipo', 'Cantidad'];

        while($row = $result->fetch_assoc()) {
            $datos[] = [$row["tipo"], (int)$row["cantidad"]];
        }

        // Convierte los datos a formato JSON
        $datos_json = json_encode($datos);
    } else {
        echo "No hay llamadas registradas.";
    }
    ?>

    <!-- Aquí es donde se mostrará el gráfico -->
    <div id="grafico"></div>

    <script type="text/javascript">
        // Carga la biblioteca de visualización y los datos
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(dibujarGrafico);

        function dibujarGrafico() {
            // Convierte los datos JSON en un objeto DataTable
            var data = google.visualization.arrayToDataTable(<?php echo $datos_json; ?>);

            // Configura las opciones del gráfico
            var opciones = {
                title: 'LLAMADAS',
                width: 800,
                height: 500
            };

            // Crea un gráfico de barras
            var chart = new google.visualization.BarChart(document.getElementById('grafico'));

            // Dibuja el gráfico con los datos y las opciones
            chart.draw(data, opciones);
        }
    </script>
</body>
</html>
