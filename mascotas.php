<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Patitas de Lady</title>
    <link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon" />
    <link
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="estilos.css">


  </head>
  <body>
    <header class="bg-light py-3">
      <div class="container">
        <img src="./img/lady.jpg" alt="Imagen" class="lady  d-block mx-auto"/>
        <h1 class="text-center">Patitas de Lady</h1>
      </div>
    </header>

    <nav class="bg-light py-2">
      <div class="container">
        <ol class="nav">
        <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="sobrenosotros.php">Sobre nosotros</a></li>
        <li style="background-color: rgb(0, 0, 0)" class="nav-item"><a class="nav-link text-white" href="mascotas.php">Mascotas</a></li>
          <li class="nav-item"><a class="nav-link" href="acceso.php">Acceso</a></li>
        </ol>
      </div>
    </nav>

   

<main class="container py-5">
    <h1 class="text-center">CONOCE NUESTRAS MASCOTAS</h1>
    <div class="row">
    <?php
        include 'conexion.php';

        $consulta = "SELECT id, nombre, especie FROM mascota";
        $resultado = $conexion->query($consulta);

        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc()) {
                echo "<div class='col-md-4'>";
                echo "<div class='centrado'>";
                echo "<h2>" . $row["nombre"] . "</h2>";
                if ($row["especie"] == "Perro") {
                    echo "<img src='./fotos/perro/" . $row["id"] . ".png' alt='Foto de " . $row["nombre"] . "' class='fotos'>";
                } else {
                    echo "<img src='./fotos/gato/" . $row["id"] . ".png' alt='Foto de " . $row["nombre"] . "' class='fotos'>";
                }
                echo "</div>";
                echo "</div>";
            }
        }
        ?>
    </div>
</main>

<footer class="bg-light py-3 text-center">
    &copy; 2024 Centro Veterinario Patitas de Lady - Todos los derechos reservados
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>