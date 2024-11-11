<?php
    $inicio = false;
    include "../includes/templates/header.php";
?>
    <main class="container my-5">
        <h1>BIENVENIDO</h1><br>
        <a href="./cliente/listar.php" class="btn btn-success">Clientes</a><br><br>
        <a href="./producto/listar.php" class="btn btn-success">Productos</a><br><br>
        <a href="./sucursal/listar.php" class="btn btn-success">Sucursal</a><br><br>
        <a href="./vendedor/listar.php" class="btn btn-success">vendedores</a><br><br>
        <a href="./venta/listar.php" class="btn btn-success">Ventas</a><br><br>
        <a href="./controlador/usuarioLista.php" class="btn btn-warning">Usuarios</a><br><br>

    </main>
<?php
    include "../includes/templates/footer.php";
?>
</body>s
</html>