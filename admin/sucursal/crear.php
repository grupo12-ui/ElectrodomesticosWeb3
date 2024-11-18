<?php
$inicio = false;
include "../../includes/templates/header.php";
?>

<main class="contenedor seccion">
    <h1>REGISTRAR NUEVA SUCURSAL</h1>
    <form action="registrar.php" method="post" class="formulario" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>
            <label for="nom">Nombre</label>
            <input type="text" name="nom" id="nom" placeholder="Nombre" required>
            <label for="pat">IdVendedor</label>
            <input type="text" name="idv" id="idv" placeholder="Nombre" required>
            <label for="mat">Direccion</label>
            <input type="text" name="dir" id="dir" placeholder="Nombre" required>
            <label for="mat">Teléfono</label>
            <input type="number" name="tel" id="tel" placeholder="Nombre" required>
            <label for="tel">Horarios</label>
            <input type="text" name="hor" id="hor" placeholder="Nombre" required>
            <label for="tel">IFrame</label>
            <input type="text" name="ifr" id="ifr" placeholder="Nombre" required>
            <br><br>
        </fieldset>
        <a href="/ElectrodomesticosWeb3/admin/indexAdmin.php" class="btn btn-secondary">Volver</a>
        <input type="submit" value="Registrar Sucursal" class="btn btn-success"><br><br>
    </form>
</main>

<?php
include "../../includes/templates/footer.php";
?>