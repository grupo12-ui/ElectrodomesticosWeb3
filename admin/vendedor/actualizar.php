<?php
$idv = $_GET['cod'] ?? null;

if (!$idv) {
    echo "<script>alert('Identificador no válido'); window.location.href = 'listar.php';</script>";
    exit;
}

require "../../includes/config/database.php";
$db = conectarDB();

$consql = "SELECT * FROM vendedores WHERE idvendedor = ?";
$stmt = mysqli_prepare($db, $consql);
mysqli_stmt_bind_param($stmt, 'i', $idv);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$reg = mysqli_fetch_array($res);

if (isset($_POST['modificar'])) {
    $n = $_POST['nom'];
    $p = $_POST['pat'];
    $m = $_POST['mat'];
    $t = $_POST['tel'];

    $updateSql = "UPDATE vendedores SET nombre = ?, paterno = ?, materno = ?, telefono = ? WHERE idvendedor = ?";
    $stmt = mysqli_prepare($db, $updateSql);
    mysqli_stmt_bind_param($stmt, 'sssii', $n, $p, $m, $t, $idv);
    $res1 = mysqli_stmt_execute($stmt);

    if ($res) {
        echo "
        <script>
            alert('Se modificó');
            location.href = 'listar.php';
        </script>";
    } else {
        echo "Error al modificar el vendedor";
    
    }
}

$inicio = false;
include "../../includes/templates/header.php";
?>
<main class="contenedor seccion">
    <h1>MODIFICAR</h1>
    
    <?php if ($reg): ?>
        <form method="post" action='' class="formulario">
            <fieldset>
                <legend>Información General</legend>
                <label for="nom">Nombre</label>
                <input type="text" name="nom" id="nom" value="<?php echo htmlspecialchars($reg['nombre']); ?>">

                <label for="pat">Paterno</label>
                <input type="text" name="pat" id="pat" value="<?php echo htmlspecialchars($reg['paterno']); ?>">

                <label for="mat">Materno</label>
                <input type="text" name="mat" id="mat" value="<?php echo htmlspecialchars($reg['materno']); ?>">

                <label for="tel">Teléfono</label>
                <input type="number" name="tel" id="tel" value="<?php echo htmlspecialchars($reg['telefono']); ?>">
            </fieldset>
 
            <div class="botones">
        <a href="/ElectrodomesticosWeb3/admin/vendedor/listar.php" class="boton boton-verde">Volver</a>
        <input type="submit" value="Modificar vendedor" class="boton boton-verde" name="modificar">
        </div>
        </form>
    <?php else: ?>
        <p>El vendedor no existe.</p>
    <?php endif; ?>
</main>

<?php include "../../includes/templates/footer.php"; ?>

