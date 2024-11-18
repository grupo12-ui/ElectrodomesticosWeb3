<?php
$inicio = false;
include "../../includes/templates/header.php";
?>
<main class="contenedor seccion">
    <h1>LISTA DE SUCURSALES</h1>
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>IdVendedor</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Horarios</th>
            <th>Operaciones</th>
        </thead>
        <tbody>
            <?php  
                include "../../includes/config/database.php";
                $db = conectarDB();
                $consql = "SELECT * FROM sucursal WHERE estado LIKE 'activo'";
                $res = mysqli_query($db, $consql);

                if ($res) {
                    while ($reg = mysqli_fetch_array($res)) {
                        echo "<tr>";
                        echo "<td>".$reg['nombre']."</td>";
                        echo "<td>".$reg['idvendedor']."</td>";
                        echo "<td>".$reg['direccion']."</td>";
                        echo "<td>".$reg['telefono']."</td>";
                        echo "<td>".$reg['horarios']."</td>";
                        echo "<td>
                            <a href='eliminar.php?cod=".$reg['idsucursal']."' class='btn btn-danger'>Eliminar</a>
                            <a href='actualizar.php?cod=".$reg['idsucursal']."' class='btn btn-dark'>Modificar</a>
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
        <a href="../sucursal/crear.php" class="btn btn-primary">Agregar Sucursal</a><br><br>
    </div>
</main>
<?php
include "../../includes/templates/footer.php";
?>