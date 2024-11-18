<?php
$inicio = false;
include "../../includes/templates/header.php";

$idc = $_GET['cod'] ?? null;

if ($idc) {
    echo "El id del cliente es: " . htmlspecialchars($idc);
    include "../../includes/config/database.php";
    $db = conectarDB();
    $consql = "UPDATE cliente SET estado = 'inactivo' WHERE idcliente = $idc";
    $res = mysqli_query($db, $consql);
 
    if ($res) {
        echo "
        <script>
            alert('El cliente fue eliminado correctamente');
            location.href = 'listar.php';
        </script>";
    } else {
        echo "Error al modificar el cliente";
        
    }
} else {
    echo "<p>ID de cliente no válido.</p>";
}
?>
<main class="contenedor seccion">
    <h1>Eliminar Cliente</h1>
</main>
<?php
include "../../includes/templates/footer.php";
?>