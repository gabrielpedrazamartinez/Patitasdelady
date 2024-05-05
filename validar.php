<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Consulta para verificar si el usuario es un veterinario
    $consulta_veterinario = "SELECT * FROM veterinario WHERE dni = '$usuario'";

    if ($contrasena == "veterinario123") {$resultado_veterinario = $conexion->query($consulta_veterinario);}

    if ($resultado_veterinario->num_rows > 0) {
        // Usuario es un veterinario
        header("Location: /patitasdelady/perfiles/veterinario/index.php");
        exit();
    } else {
        // Consulta para verificar si el usuario es un cliente
        $consulta_cliente = "SELECT * FROM cliente WHERE nombre_completo = '$usuario' AND contrasena = 'cliente123'";
        $resultado_cliente = $conexion->query($consulta_cliente);

        if ($resultado_cliente->num_rows > 0) {
            // Usuario es un cliente
            header("Location: /patitasdelady/perfiles/cliente/index.php");
            exit();
        } else {
            // Usuario no encontrado, redirige a la página anterior con alerta
            echo "<script>alert('Usuario no encontrado. Por favor, inténtelo de nuevo.');</script>";
            echo "<script>window.history.back();</script>";
            exit();
        }
    }
} else {
    // Si no es una solicitud POST, redirigir a acceso.php
    header("Location: acceso.php");
    exit();
}
?>
