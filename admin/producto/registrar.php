<?php
$inicio = false;
include "../../includes/templates/header.php";

if ($_POST) {
    $t = $_POST['tit'];
    $p = $_POST['pre'];
    $d = $_POST['des'];
    $h = $_POST['hab'];
    $b = $_POST['wc'];
    $e = $_POST['est'];
    $v = $_POST['ven'];
    $i = $_FILES['ima']['name'];

    require "../../includes/config/database.php";
    $db = conectarDB();

    $ruta_imagen = "imagenes/" . basename($i);

    $con_sql = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, idvendedor, imagen, estado, creado) 
                VALUES ('$t', '$p', '$d', '$h', '$b', '$e', '$v', '$ruta_imagen', 'activo', CURDATE())";
    
    $res = mysqli_query($db, $con_sql);

    if ($res) {
        $tmp = $_FILES['ima']['tmp_name'];
        // Mover la imagen a la carpeta indicada
        if (move_uploaded_file($tmp, $ruta_imagen)) {
            echo "
            <script>
                alert('Propiedad registrada correctamente');
                window.location.href = 'listapropiedades.php';
            </script>";
        } else {
            echo "<p>Error al subir la imagen.</p>";
        }
    } else {
        echo "<p>Error al registrar la propiedad.</p>";
    }
}
?>

<a href="../../propiedades/crearpropiedad.php" class="boton boton-verde">Agregar propiedad</a>

<?php
include "../../includes/templates/footer.php";
?>
