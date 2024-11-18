<?php
    include "../../includes/templates/header.php";
    $inicio=false;
?>
<main class="contenedor seccion">
    <h1>LISTA DE PRODUCTOS</h1>
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Categoria</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Operaciones</th>
        </thead>
        <tbody>
            <?php
                include "../../includes/config/database.php";
                $db=conectarDB();
                $consql="SELECT * FROM producto WHERE estado LIKE 'activo' ";
                $res=mysqli_query($db,$consql);
                if ($res) {
                    while($reg=mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>".$reg["nombre"]."</td>";
                        echo "<td>".$reg["marca"]."</td>";
                        echo "<td>".$reg["categoria"]."</td>";
                        echo "<td>".$reg["precio"]."</td>";
                        echo "<td>".$reg["stock"]."</td>";
                        echo "<td>
                            <a href='eliminar.php?cod=".$reg['idproducto']."' class='btn btn-danger'>Eliminar</a>
                            <a href='actualizar.php?cod=".$reg['idproducto']."' class='btn btn-dark'>Modificar</a>
                        </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Error en la consulta: " . mysqli_error($db) . "</td></tr>";
                }
            ?>
        </tbody>
    </table>
    <div class="botones">
        <a href="/ElectrodomesticosWeb3/admin/indexAdmin.php" class="btn btn-secondary">Volver</a>
        <a href="../producto/crear.php" class="btn btn-primary">Agregar Producto</a><br><br>
    </div>
</main>
<?php
    include "../../includes/templates/footer.php";
?>