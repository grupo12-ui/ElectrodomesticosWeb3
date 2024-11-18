<?php
    $inicio=false;
    include "../../includes/templates/header.php"
?>
<main class="contenedor seccion">
    <h1>Crear</h1>
    <form method="post" action="registrar.php" class="formulario">
     <fieldset>
         <legend>Informacion General</legend>
         <label for="">Nombre:</label>
         <input type="text" name="nom" id="nom" placeholder="Nombre">
         <label for="">Paterno:</label>
         <input type="text" name="pat" id="pat" placeholder="Apellido Paterno">
         <label for="">Materno:</label>
         <input type="text" name="mat" id="mat" placeholder="Apellido Materno">
         <label for="mat">Email</label>
         <input type="text" name="eml" id="eml" placeholder="Email">
         <label for="">Telefono:</label>
         <input type="number" name="tel" id="tel" placeholder="Telefono">
         <br><br>
     </fieldset>
        <a href="/ElectrodomesticosWeb3/admin/indexAdmin.php" class="btn btn-secondary">Volver</a>
       <input type="submit" value="Registrar Cliente" class="btn btn-success"><br><br>
    </form>


</main>
<?php
    include "../../includes/templates/footer.php"
?>