<?php
$inicio = false;
include "../../includes/templates/header.php";
?>
<main class="contenedor seccion">
    <h1>LISTA DE VENDEDORES</h1>
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Paterno</th>
            <th>Materno</th>
            <th>Teléfono</th>
            <th>Operaciones</th>
        </thead>
        <tbody>
            <?php  
                include "../../includes/config/database.php";
                $db = conectarDB();
                $consql = "SELECT nombre, paterno, materno, telefono, idVendedor FROM vendedor WHERE estado LIKE 'activo'";
                $res = mysqli_query($db, $consql);

                if ($res) {
                    while ($reg = mysqli_fetch_array($res)) {
                        echo "<tr>";
                        echo "<td>".$reg['nombre']."</td>";
                        echo "<td>".$reg['paterno']."</td>";
                        echo "<td>".$reg['materno']."</td>";
                        echo "<td>".$reg['telefono']."</td>";
                        echo "<td>
                                <a href='eliminar.php?cod=".$reg['idVendedor']."' class='btn btn-danger'>Eliminar</a>
                                <a href='actualizar.php?cod=".$reg['idVendedor']."' class='btn btn-dark'>Modificar</a>
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
        <a href="/ElectrodomesticosWeb3/admin/indexAdmin.php" class="boton boton-verde">Volver</a>
        <a href="../vendedor/crear.php" class="boton boton-verde">Agregar vendedor</a>
        </div>
</main>
<?php
include "../../includes/templates/footer.php";
?>
