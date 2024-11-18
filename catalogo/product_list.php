<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'conexion.php';

// Verificar que el usuario esté logueado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

if ($_SESSION['rol'] == 'admin' && isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "DELETE FROM productos WHERE id = '$id'";

    if ($conexion->query($sql) === TRUE) {
        header("Location: product_list.php");
        exit();
    } else {
        echo "Error al eliminar el producto: " . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <h2>Lista de Productos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <?php if ($_SESSION['rol'] == 'admin'): ?>
                <th>Acciones</th>
            <?php endif; ?>
        </tr>
        <?php
        $sql = "SELECT * FROM productos";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            while($producto = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $producto['id'] . "</td>";
                echo "<td>" . $producto['nombre'] . "</td>";
                echo "<td>" . $producto['descripcion'] . "</td>";
                echo "<td>" . $producto['precio'] . "</td>";
                if ($_SESSION['rol'] == 'admin') {
                    echo "<td><a href='product_list.php?delete_id=" . $producto['id'] . "' onclick='return confirm(\"¿Seguro que deseas eliminar este producto?\");'>Borrar</a></td>";
                }
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay productos.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
