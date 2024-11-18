<?php
$inicio = false;
include "../../includes/templates/header.php";
?>
<main class="contenedor seccion">
    <h1>LISTA DE CLIENTES</h1>
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Paterno</th>
            <th>Materno</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Operaciones</th>
        </thead>
        <tbody>
            <?php  
                include "../../includes/config/database.php";
                $db = conectarDB();
                $consql = "SELECT * FROM cliente WHERE estado LIKE 'activo'";
                $res = mysqli_query($db, $consql);

                if ($res) {
                    while ($reg = mysqli_fetch_array($res)) {
                        echo "<tr>";
                        echo "<td>".$reg['nombre']."</td>";
                        echo "<td>".$reg['paterno']."</td>";
                        echo "<td>".$reg['materno']."</td>";
                        echo "<td>".$reg['email']."</td>";
                        echo "<td>".$reg['telefono']."</td>";
                        echo "<td>
                            <a href='eliminar.php?cod=".$reg['idcliente']."' class='btn btn-danger'>Eliminar</a>
                            <a href='actualizar.php?cod=".$reg['idcliente']."' class='btn btn-dark'>Modificar</a>
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
        <a href="../cliente/crear.php" class="btn btn-primary">Agregar cliente</a><br><br>
    </div>
</main>
<?php
include "../../includes/templates/footer.php";
?>