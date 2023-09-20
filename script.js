// script.js
document.addEventListener('DOMContentLoaded', function() {
    // Recuperar los datos de la base de datos con PHP
    fetch('data.php')
        .then(response => response.json())
        .then(data => {
            const labels = data.labels;
            const values = data.values;

            // Crear el gráfico de pastel
            const ctx = document.getElementById('myPieChart').getContext('2d');
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        data: values,
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)',
                            // Agrega más colores si tienes más categorías
                        ],
                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                },
            });
        })
        .catch(error => {
            console.error('Error al recuperar los datos:', error);
        });
});
