<?php
    $inicio=false;
    include "../../includes/templates/header.php"
?>
    <main class="contenedor seccion">
        <h1>Lista Vendedores</h1>
        <table class="table table-striped">
            <thead>
                <th> Nombre</th>
                <th> Paterno</th>
                <th> Materno</th>
                <th>Teléfono</th>
            </thead>
            <tbody>
                <?php
                    include "../../includes/config/database.php";
                    $db=conectarBD();
                    $consql = "SELECT nombre, paterno, materno, telefono, idvendedor FROM vendedores WHERE estado LIKE 'activo'";
                    $res = mysqli_query($db,$consql);
                    if ($res) {
                    while ($reg=mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>".$reg['nombre']."</td>";
                        echo "<td>".$reg['paterno']."</td>";
                       echo "<td>".$reg['materno']."</td>";
                       echo "<td>".$reg['telefono']."</td>";
                       echo "<td>
                       <a href='borrar.php?cod=".$reg['idvendedor']."' class='btn btn-danger'>Eliminar</a>
                       <a href='actualizar.php?cod=".$reg['idvendedor']."' class='btn btn-dark'>Modificar</a>
                     </td>";
               echo "</tr>";
                       
                    }}else {
                        echo "<tr><td colspan='5'>Error en la consulta: " . mysqli_error($db) . "</td></tr>";
                    }
                ?>
            </tbody>
                </table>
                <div class="botones">
        <a href="/ElectrodomesticosWeb3-main/admin/index.php" class="btn btn-dark">Volver</a>
        <a href="../vendedores/crear.php" class="btn btn-dark">Agregar vendedor</a>
        </div>
                </main>
                <?php
    include "../../includes/templates/footer.php";
?>