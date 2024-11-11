<?php
$inicio = false;
include "../../includes/templates/header.php";

if ($_POST) {
    $p = $_POST['nom'];
    $d = $_POST['mrc'];
    $h = $_POST['cat'];
    $e = $_POST['pre'];
    $v = $_POST['stck'];


    require "../../includes/config/database.php";
    $db = conectarDB();


    $con_sql = "INSERT INTO productos (nombre, marca, categoria, precio, stock) 
                VALUES ('$p', '$d', '$h', '$e', '$v')";
    
    $res = mysqli_query($db, $con_sql);

    if ($res) {
        echo"SE registro";
    } else {
        echo "<p>Error al registrar la producto.</p>";
    }
}
?>

<a href="../../producto/crear.php" class="boton boton-verde">Agregar Producto</a>

<?php
include "../../includes/templates/footer.php";
?>
