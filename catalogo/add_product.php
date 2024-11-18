<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'conexion.php';

// Verificar que el usuario esté logueado y autorizado
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] != 'admin') {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $sql = "INSERT INTO productos (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";

    if ($conexion->query($sql) === TRUE) {
        header("Location: product_list.php");
        exit();
    } else {
        echo "Error al agregar el producto: " . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <h2>Agregar Producto</h2>
    <form method="post" action="add_product.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" required><br>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" required><br>

        <button type="submit">Agregar Producto</button>
    </form>
</body>
</html>
