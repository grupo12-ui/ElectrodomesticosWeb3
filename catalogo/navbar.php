<?php
// navbar.php
?>
<nav>
    <a href="product_list.php">Lista de Productos</a>
    <a href="add_product.php">Agregar Producto</a>
    <?php if (isset($_SESSION['usuario'])): ?>
        <a href="logout.php">Cerrar Sesión</a>
    <?php else: ?>
        <a href="login.php">Iniciar Sesión</a>
    <?php endif; ?>
</nav>
<hr>
