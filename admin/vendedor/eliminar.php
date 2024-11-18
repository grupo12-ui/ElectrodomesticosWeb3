<?php
$inicio = false;
include "../../includes/templates/header.php";

$idv = $_GET['cod'] ?? null;

if ($idv) {
    echo "El id del vendedor es: " . htmlspecialchars($idv);
    include "../../includes/config/database.php";
    $db = conectarDB();
    $consql = "UPDATE vendedor SET estado = 'inactivo' WHERE idvendedor = $idv";
    $res = mysqli_query($db, $consql);
 
    if ($res) {
        echo "
        <script>
            alert('El vendedor fue eliminado correctamente');
            location.href = 'listar.php';
        </script>";
    } else {
        echo "Error al modificar el vendedor";
        
    }
} else {
    echo "<p>ID de vendedor no válido.</p>";
}
?>
<main class="contenedor seccion">
    <h1>Eliminar Vendedor</h1>
</main>
<?php
include "../../includes/templates/footer.php";
?>
