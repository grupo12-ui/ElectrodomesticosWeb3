<?php
$inicio = false;
include "../../includes/templates/header.php";

$idvs = $_GET['cod'] ?? null;

if ($idvs) {
    echo "El id del venta es: " . htmlspecialchars($idvs);
    include "../../includes/config/database.php";
    $db = conectarDB();
    $consql = "UPDATE venta SET estado = 'inactivo' WHERE idventa = $idvs";
    $res = mysqli_query($db, $consql);
 
    if ($res) {
        echo "
        <script>
            alert('El venta fue eliminado correctamente');
            location.href = 'listar.php';
        </script>";
    } else {
        echo "Error al modificar el venta";
        
    }
} else {
    echo "<p>ID de venta no válido.</p>";
}
?>
<main class="contenedor seccion">
    <h1>Eliminar venta</h1>
</main>
<?php
include "../../includes/templates/footer.php";
?>
