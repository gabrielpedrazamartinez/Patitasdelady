<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patitas de Lady</title>
    <link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<header>
    <img src="./img/lady.jpg" alt="Imagen">
    <h1>Patitas de Lady</h1>
</header>

<nav>

<ol>
    <li><a href="index.html">Inicio</a></li>
    <li><a href="sobrenosotros.php">Sobre nosotros</a></li>
    <li style="background-color: rgb(0, 0, 0);"><a href="mascotas.php">Mascotas</a></li>
    <li><a href="acceso.php">Acceso</a></li>
</ol>

</nav>

<main>

<h1>CONOCE NUESTRAS MASCOTAS</h1>
<div class="contenedor2">
<?php
include 'conexion.php';

$consulta = "SELECT id, nombre, especie FROM mascota";
$resultado = $conexion->query($consulta);

if ($resultado->num_rows > 0) {
   
    while($row = $resultado->fetch_assoc()) {
        echo "<div class='centrado'>";
        echo "<h2>" . $row["nombre"] . "</h2>";
      if ($row["especie"] == "Perro")  echo "<img src='./fotos/perro/" . $row["id"] . ".png' alt='Foto de " . $row["nombre"] . "' width='200' height='200'>";
      else echo "<img src='./fotos/gato/" . $row["id"] . ".png' alt='Foto de " . $row["nombre"] . "' width='200' height='200'>";
        echo "</div>";
    }
}

?>
</div>
</main>

<footer>
    
    &copy; 2024 Centro Veterinario Patitas de Lady - Todos los derechos reservados
        
</footer>

</body>
</html>