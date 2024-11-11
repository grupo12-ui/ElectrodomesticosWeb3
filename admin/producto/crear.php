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
            <input type="number" name="pre" id="pre" step="0.01" required>
            <label for="">Stock</label>
            <input type="number" name="stck" id="stck" step="0.01" required>
            
            
           
        </fieldset>
        
       
        <!--- 
        <fieldset>
            <legend>Vendedor</legend>
            <select name="ven" id="ven" required>
                <option value="">Seleccione un Producto</option>
    
            </select>
        </fieldset>
        --->
            <a href="/ElectrodomesticosWeb3/admin/producto/listar.php" class="boton boton-verde">Volver</a>
            <input type="submit" value="Registrar Producto" class="boton boton-verde">
        
    </form>
</main>

<?php
include "../../includes/templates/footer.php";
?>
