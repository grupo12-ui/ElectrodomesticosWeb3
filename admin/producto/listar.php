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
                $db=conectarDB();
                $res=mysqli_query($db,$consql);
                while($reg=mysqli_fetch_array($res)){
                    echo "<tr>";
                    echo "<td>".$reg["nombre"]."</td>";
                    echo "<td>".$reg["marca"]."</td>";
                    echo "<td>".$reg["categoria"]."</td>";
                    echo "<td>".$reg["precio"]."</td>";
                    echo "<td>".$reg["stock"]."</td>";
                    

                    echo "<td><a href='eliminar.php?cod=".$reg['idproducto']."' class='btn btn-danger'>Eliminar</a></td>";
                    echo "<td><a href='actualizar.php?cod=".$reg['idproducto']."' class='btn btn-dark'>Modificar</a></td>";
                    echo "</tr>";
                }
            ?>

        </tbody>
    </table>
    <div class="botones">
        <a href="/ElectrodomesticosWeb3/admin/indexAdmin.php" class="boton boton-verde">Volver</a>
        <a href="../producto/crear.php" class="boton boton-verde">Agregar Producto</a>
        </div>
</main>
<?php
    include "../../includes/templates/footer.php";
?>
