<?php
$inicio = false;
include "../../includes/templates/header.php";
?>

<main class="contenedor seccion">
    <h1>REGISTRAR NUEVO PRODUCTO</h1>
    <form action="registrar.php" method="post" class="formulario" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>
            <label for="">Nombre</label>
            <input type="text" name="nom" id="nom" placeholder="Nombre" required>
            <label for="">Marca</label>
            <input type="text" name="mrc" id="mrc" placeholder="Marca" required>
            <label for="">Categoria</label>
            <input type="text" name="cat" id="cat" placeholder="Categoria" required>
            <label for="">Precio</label>
            <input type="number" name="pre" id="pre" step="0.01"  placeholder="Precio" required>
            <label for="">Stock</label>
            <input type="number" name="stk" id="stk"  placeholder="Stock" required>
            <br><br>
        </fieldset>
        <a href="/ElectrodomesticosWeb3/admin/indexAdmin.php" class="btn btn-secondary">Volver</a>
        <input type="submit" value="Registrar Producto" class="btn btn-success"><br><br>
    </form>
</main>

<?php
include "../../includes/templates/footer.php";
?>
