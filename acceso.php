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
          <li class="nav-item"><a class="nav-link" href="mascotas.php">Mascotas</a></li>
          <li style="background-color: rgb(0, 0, 0)" class="nav-item"><a class="nav-link text-white" href="acceso.php">Acceso</a></li>
        </ol>
      </div>
    </nav>

   
    <main>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h3 class="text-center">Iniciar Sesión</h3>
                    </div>
                    <div class="card-body">
                        <form action="validar.php" method="POST">
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="contrasena">Contraseña</label>
                                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                                    </div>
                                    <div class="col">
                                        <a href="registro.php" class="btn btn-success btn-block">Registrarse</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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