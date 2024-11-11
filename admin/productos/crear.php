<?php
$inicio = false;
include "../../includes/templates/header.php";
?>

<main class="contenedor seccion">
    <h1>REGISTRAR NUEVO PRODUCTO</h1>
    <form action="registrarpropiedad.php" method="post" class="formulario" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>
            <label for="tit">Nombre</label>
            <input type="text" name="tit" id="tit" placeholder="Nombre" required>

            <label for="tit">Marca</label>
            <input type="text" name="tit" id="tit" placeholder="Marca" required>

            <label for="tit">Categoria</label>
            <input type="text" name="tit" id="tit" placeholder="Categoria" required>
            
            <label for="pre">Precio</label>
            <input type="number" name="pre" id="pre" step="0.01" required>
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" step="0.01" required>
            
            
           
        </fieldset>
        
       
        
        <fieldset>
            <legend>Vendedor</legend>
            <select name="ven" id="ven" required>
                <option value="">Seleccione un Producto</option>
                <?php
                    include "../../includes/config/database.php";
                    $db = conectarDB();

                    if (!$db) {
                        echo "<option>Error en la conexión a la base de datos</option>";
                    } else {
                        $con_sql = "SELECT idvendedores, nombre, paterno, materno FROM vendedores WHERE estado = 'activo'";
                        $res = mysqli_query($db, $con_sql);

                        if ($res) {
                            while ($reg = $res->fetch_assoc()) {
                                echo "<option value='" . htmlspecialchars($reg['idproducto']) . "'>";
                                echo htmlspecialchars($reg['nombre'] . " " . $reg['marca'] . " " . $reg['categoria']. " " . $reg['precio']. " " . $reg['stock']);
                                echo "</option>";
                            }
                        } else {
                            echo "<option>Error en la consulta: " . mysqli_error($db) . "</option>";
                        }
                    }
                ?>
            </select>
        </fieldset>
            <a href="/ElectrodomesticosWeb3-main/admin/propiedades/listapropiedades.php" class="boton boton-verde">Volver</a>
            <input type="submit" value="Registrar nueva propiedad" class="boton boton-verde">
        
    </form>
</main>

<?php
include "../../includes/templates/footer.php";
?>
