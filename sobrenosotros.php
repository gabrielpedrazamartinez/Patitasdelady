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
        <li style="background-color: rgb(0, 0, 0)" class="nav-item"><a class="nav-link text-white" href="sobrenosotros.php">Sobre nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="mascotas.php">Mascotas</a></li>
          <li class="nav-item"><a class="nav-link" href="acceso.php">Acceso</a></li>
        </ol>
      </div>
    </nav>

<main class="container py-5">
    <h1 class="text-center">CONOCE NUESTROS VETERINARIOS</h1>
    <div class="row">
    <?php
        include 'conexion.php';

        $consulta = "SELECT id, nombre_completo, genero FROM veterinario";
        $resultado = $conexion->query($consulta);

        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc()) {
                echo "<div class='col-md-4'>";
                echo "<div class='centrado'>";
                echo "<h2>" . $row["nombre_completo"] . "</h2>";
                if ($row["genero"] == "Masculino") {
                    echo "<img src='./fotos/veterinario/" . $row["id"] . ".png' alt='Foto de " . $row["nombre_completo"] . "' class='fotos'>";
                } else {
                    echo "<img src='./fotos/veterinaria/" . $row["id"] . ".png' alt='Foto de " . $row["nombre_completo"] . "' class='fotos'>";
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