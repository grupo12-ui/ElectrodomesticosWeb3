<?php
    $inicio=false;
    include "../../includes/templates/header.php"

    ?>
   
    <main class="contenedor seccion">
        <h1>Registrar usuario</h1>
        <a href="../controlador/usuarioLista.php" class="boton boton-verde">Volver</a>
        <form method="post" action="registrarvendedor.php" class="formulario">
        <fieldset>
            <legend>Información General</legend>
            <label for="">Email:</label>
            <select name="" id=""></select>
            <input type="email" name="ema" id="nom" placeholder="usuario@gmail.com">
            
            <label for="">  Contraseña:</label>
            <input type="password" name="pas" id="pas" placeholder="...">
            
            <label for="">Rol:</label>
            <select name="" id="">
            <input name="rol" id="rol">
                <option value="1">Administrador</option>
                <option value="2">Empleado</option>
            </select>
            
        </fieldset>
            <input type="submit" value="Registrar Usuario" name="registrarUsu" class="boton boton-verde">
    
       </form>

        
    </main>
<?php
    include "../../includes/templates/footer.php";
?>

