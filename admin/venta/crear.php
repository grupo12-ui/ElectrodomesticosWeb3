<?php
    $inicio=false;
    include "../../includes/templates/header.php"
?>
<main class="contenedor seccion">
    <h1>Crear</h1>
    <form method="post" action="registrar.php" class="formulario">
     <fieldset>
         <legend>Informacion General</legend>
         <label for="">Total:</label>
         <input type="number" name="tot" id="tot" placeholder="Total">
         <label for="">IdVendedor:</label>
         <input type="number" name="idv" id="idv" placeholder="IdVendedor">
         <label for="">IdCliente:</label>
         <input type="number" name="idc" id="idc" placeholder="IdCliente">
         <label for="">IdProducto:</label>
         <input type="number" name="idp" id="idp" placeholder="IdProducto">
         <label for="">IdSucursal:</label>
         <input type="number" name="ids" id="ids" placeholder="IdSucursal">
         <br><br>
     </fieldset>
        <a href="/ElectrodomesticosWeb3/admin/indexAdmin.php" class="btn btn-secondary">Volver</a>
      <input type="submit" value="Registrar Venta" class="btn btn-success"><br><br>
    </form>


</main>
<?php
    include "../../includes/templates/footer.php"
?>