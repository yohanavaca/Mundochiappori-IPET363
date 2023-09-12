<!DOCTYPE html>
<html>
<head>
    <title>Hospital Santa Ana</title>
    <link rel="stylesheet" href="pata.css">
</head>
<body>
    
    <header class="header">
        <img src="./descarga.jpeg" alt="" width="80">
        <h1>Bienvenido al Hospital Santa Ana</h1>
        <!-- Menú desplegable -->
        <div class="dropdown">
            <input type="checkbox" id="menuToggle">
            <label for="menuToggle"></label>
            <div class="dropdown-content">
                <a href="index.php">Inicio</a>
                <a href="contact.php">Contacto</a>
            </div>
        </div>
    </header>

    <main>
        <h2>Nuestros Servicios</h2>
        <p>Ofrecemos una amplia gama de servicios médicos de alta calidad.</p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Hospital Santa Ana</p>
    </footer>
</body>
</html>
