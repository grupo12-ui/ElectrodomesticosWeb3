<?php
$inicio = false;
include "../../includes/templates/header.php";

$idp = intval($_GET['cod'] ?? 0);

if ($idp) {
    echo "El id del cliente es: " . htmlspecialchars($idp);
    include "../../includes/config/database.php";
    $db = conectarDB();
    $consql = "UPDATE producto SET estado = 'inactivo' WHERE idproducto = $idp";
    $res = mysqli_query($db, $consql);

    if ($res) {
        echo "
            <script>
                alert('El producto se eliminó correctamente');
                window.location.href = 'listar.php';
            </script>
        ";
    } else {
        echo "<p>No se pudo eliminar la producto.</p>";
    }
} else {
    echo "<p>ID de producto no válido.</p>";
}
?>
<main class="contenedor seccion">
    <h1>Eliminar</h1>
</main>
<?php
include "../../includes/templates/footer.php";
?>