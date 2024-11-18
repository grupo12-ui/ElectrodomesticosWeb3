<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <h2>Bienvenido al Catálogo de Productos</h2>
    <p>Use la barra de navegación para gestionar el catálogo.</p>
</body>
</html>
