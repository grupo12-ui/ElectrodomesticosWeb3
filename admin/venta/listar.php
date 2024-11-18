<?php
$inicio = false;
include "../../includes/templates/header.php";
?>
<main class="contenedor seccion">
    <h1>LISTA DE VENTAS</h1>
    <table class="table table-striped">
        <thead>
            <th>Total</th>
            <th>IdVendedor</th>
            <th>IdCliente</th>
            <th>IdProducto</th>
            <th>IdSucursal</th>
            <th>Operaciones</th>
        </thead>
        <tbody>
            <?php  
                include "../../includes/config/database.php";
                $db = conectarDB();
                $consql = "SELECT * FROM venta WHERE estado LIKE 'activo'";
                $res = mysqli_query($db, $consql);

                if ($res) {
                    while ($reg = mysqli_fetch_array($res)) {
                        echo "<tr>";
                        echo "<td>".$reg['total']."</td>";
                        echo "<td>".$reg['idvendedor']."</td>";
                        echo "<td>".$reg['idcliente']."</td>";
                        echo "<td>".$reg['idproducto']."</td>";
                        echo "<td>".$reg['idsucursal']."</td>";
                        echo "<td>
                            <a href='eliminar.php?cod=".$reg['idventa']."' class='btn btn-danger'>Eliminar</a>
                            <a href='actualizar.php?cod=".$reg['idventa']."' class='btn btn-dark'>Modificar</a>
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
        <a href="../venta/crear.php" class="btn btn-primary">Agregar Venta</a><br><br>
    </div>
</main>
<?php
include "../../includes/templates/footer.php";
?>