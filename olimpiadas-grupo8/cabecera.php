<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .logo {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }

        .container-md{
            background-color: rgb(74, 147, 255);
            padding: 5px;
            flex-direction: row-reverse;
            max-width: 100%;
            
        }
        .n.navbar-expand-lg .navbar-collapse{
          display: flex;
          justify-content: space-between;
        }

        .navbar navbar-expand-lg bg-body-tertiary{
          position: fixed;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-md">
    
        <a class="navbar-brand" href="#"><img src="./img/logoh.png" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <img src="./img/logoh.png" alt="logo">
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        
        <li class="nav-item">
          <a class="nav-link active" href="administrador.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Cambiar de usuario</a>
        </li>
        <li class="nav-item-2">
          <a class="nav-link" href="logOut.php">Cerrar sesión</a>
        </li>
        
      </ul>
    
    </div>
  </div>
</nav>
</body> 
</html>