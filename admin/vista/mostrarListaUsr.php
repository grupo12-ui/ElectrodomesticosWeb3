<?php
    $inicio = false;
    include "../../includes/templates/header.php";
?>

<main class="contenedor seccion">
    <a href="../controlador/usuarioLista.php" class="boton boton-verde">Nuevo Usuario</a>
    <h1>Lista de Usuarios</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Correo Electrónico</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Asumiendo que $res contiene el resultado de una consulta a la base de datos
            while ($reg = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($reg['email']) . "</td>";
                echo "<td>" . htmlspecialchars($reg['rol']) . "</td>";

                echo "</tr>";
                
            }
            ?>
        </tbody>
    </table>
</main>

<?php
    include "../../includes/templates/footer.php";
?>
