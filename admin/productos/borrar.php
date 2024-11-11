<?php
$inicio = false;
include "../../includes/templates/header.php";

$idp = intval($_GET['cod'] ?? 0);

echo "El id de la propiedad es: " . $idp;
include "../../includes/config/database.php";
$db = conectarBD();
if ($idp > 0) {
    $consql = "DELETE FROM productos WHERE id = $idp";
    $res = mysqli_query($db, $consql);

    if ($res) {
        echo "
            <script>
                alert('el producto se eliminó correctamente');
                window.location.href = 'listado.php';
            </script>
        ";
    } else {
        echo "<p>No se pudo eliminar la propiedad.</p>";
    }
} else {
    echo "<p>ID de propiedad no válido.</p>";
}
?>

<main class="contenedor seccion">
    <h1>Eliminar</h1>
</main>

<?php
include "../../includes/templates/footer.php";
?>
