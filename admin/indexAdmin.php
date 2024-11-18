<?php
    $inicio = false;
    include "../includes/templates/header.php";
?>
    <main class="container my-5">
        <h1>BIENVENIDO</h1><br>
        <p>Use el botón para gestionar el catálogo de Clientes:
            <a href="./cliente/listar.php" class="btn btn-success">Clientes</a></p>
        <p>Use el botón para gestionar el catálogo de Productos:
            <a href="./producto/listar.php" class="btn btn-success">Productos</a></p>
        <p>Use el botón para gestionar el catálogo de Sucursales:
            <a href="./sucursal/listar.php" class="btn btn-success">Sucursal</a></p>
        <p>Use el botón para gestionar el catálogo de Vendedores:
            <a href="./vendedor/listar.php" class="btn btn-success">Vendedores</a></p>
        <p>Use el botón para gestionar el catálogo de Ventas:
            <a href="./venta/listar.php" class="btn btn-success">Ventas</a></p>
        <p>Use el botón para gestionar el catálogo de Usuarios:
            <a href="./controlador/usuarioLista.php" class="btn btn-warning">Usuarios</a></p>

    </main>
<?php
    include "../includes/templates/footer.php";
?>
</body>s
</html>