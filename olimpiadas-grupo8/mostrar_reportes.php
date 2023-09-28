<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizador de Reportes</title>
    <!-- Incluir Chart.js desde una CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Visualizador de Reportes en Gráficos de Barras</h1>
    <canvas id="reportesChart" width="400" height="200"></canvas>

    <?php
    // Conectar a la base de datos (ajusta los datos de conexión según tu configuración)
    $conexion = mysqli_connect("localhost", "id21316587_val", "Aleli1918_", "id21316587_datos_paciente") or exit("No se puede conectar a la base de datos.");

    // Consultar la base de datos para obtener datos de reportes (ejemplo)
    $sql = "SELECT diagnostico, COUNT(*) AS cantidad FROM reporte GROUP BY diagnostico";
    $result = mysqli_query($conexion, $sql);

    $diagnosticos = [];
    $cantidades = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $diagnosticos[] = $row['diagnostico'];
        $cantidades[] = $row['cantidad'];
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
    ?>

    <script>
        // Obtener los datos de PHP
        var diagnosticos = <?php echo json_encode($diagnosticos); ?>;
        var cantidades = <?php echo json_encode($cantidades); ?>;

        // Crear el gráfico de barras
        var ctx = document.getElementById('reportesChart').getContext('2d');
        var reportesChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: diagnosticos,
                datasets: [{
                    label: 'Cantidad de Reportes',
                    data: cantidades,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Color de fondo de las barras
                    borderColor: 'rgba(75, 192, 192, 1)', // Borde de las barras
                    borderWidth: 1 // Ancho del borde de las barras
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true // Comenzar desde 0 en el eje Y
                    }
                }
            }
        });
    </script>
</body>
</html>
