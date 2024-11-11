<?php
    $inicio=false;
    include "../../includes/templates/header.php"
?>
<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/ElectrodomesticosWeb3/admin/indexAdmin.php" class="boton boton-verde">Volver</a>
    <form method="post" action="registrar.php" class="formulario">
     <fieldset>
         <legend>Informacion General</legend>
         <label for="">Nombre:</label>
         <input type="text" name="nom" id="nom" placeholder="Nombre">
         <label for="">Paterno:</label>
         <input type="text" name="pat" id="pat" placeholder="Apellido Paterno">
         <label for="">Materno:</label>
         <input type="text" name="mat" id="mat" placeholder="Apellido Materno">
         <label for="">Telefono:</label>
         <input type="number" name="tel" id="tel" placeholder="Telefono">

     </fieldset>
      <input type="submit" value="Registrar Vendedor" class="boton boton-verde">
    </form>

</main>
<?php
    include "../../includes/templates/footer.php"
?>
