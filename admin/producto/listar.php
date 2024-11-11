<?php
    include "../../includes/templates/header.php";
    $inicio=false;
?>
<main class="contenedor seccion">
    <h1>Lista Productos</h1>
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Categoria</th>
            <th>Precio</th>
            <th>Stock</th>
        </thead>
        <tbody>
            <?php
                include "../../includes/config/database.php";
                $consql="SELECT * FROM productos"  ;
                $db=conectarBD();
                $res=mysqli_query($db,$consql);
                while($reg=mysqli_fetch_array($res)){
                    echo "<tr>";
                    echo "<td>".$reg["nombre"]."</td>";
                    echo "<td>".$reg["marca"]."</td>";
                    echo "<td>".$reg["categoria"]."</td>";
                    echo "<td>".$reg["precio"]."</td>";
                    echo "<td>".$reg["stock"]."</td>";
                    echo "<td><a href='borrar.php'>Eliminar</a></td>";
                    echo "<td><a href='actualizar.phpr'>Modificar</a></td>";
                    echo "</tr>";
                }
            ?>

        </tbody>
    </table>
</main>
<?php
    include "../../includes/templates/footer.php";
?>
