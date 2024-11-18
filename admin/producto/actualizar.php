<?php
$idp = $_GET['cod'] ?? null;

if (!$idp) {
    echo "<script>alert('Identificador no válido'); window.location.href = 'listar.php';</script>";
    exit;
}

require "../../includes/config/database.php";
$db = conectarDB();

$consql = "SELECT * FROM producto WHERE idproducto = ?";
$stmt = mysqli_prepare($db, $consql);
mysqli_stmt_bind_param($stmt, 'i', $idp);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$reg = mysqli_fetch_array($res);

if (isset($_POST['modificar'])) {
    $a = $_POST['nom'];
    $b = $_POST['mrc'];
    $c = $_POST['cat'];
    $d = $_POST['prc'];
    $e = $_POST['stk'];

    $updateSql = "UPDATE producto SET nombre = ?, marca = ?, categoria = ?, precio = ?, stock = ? WHERE idproducto = ?";
    $stmt = mysqli_prepare($db, $updateSql);
    mysqli_stmt_bind_param($stmt, 'sssdii', $a, $b, $c, $d, $e, $idp);
    $res1 = mysqli_stmt_execute($stmt);

    if ($res) {
        echo "
        <script>
            alert('Se modificó');
            location.href = 'listar.php';
        </script>";
    } else {
        echo "Error al modificar el producto";
    
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

                <label for="pat">Marca</label>
                <input type="text" name="mrc" id="mrc" value="<?php echo htmlspecialchars($reg['marca']); ?>">

                <label for="mat">Categoría</label>
                <input type="text" name="cat" id="cat" value="<?php echo htmlspecialchars($reg['categoria']); ?>">

                <label for="mat">Precio</label>
                <input type="number" name="prc" step="0.01" id="prc" value="<?php echo htmlspecialchars(number_format($reg['precio'], 2, '.', '')); ?>">

                <label for="tel">Stock</label>
                <input type="number" name="stk" id="stk" value="<?php echo htmlspecialchars($reg['stock']); ?>">
            </fieldset>
 
            <div class="botones"><br>
                <a href="/ElectrodomesticosWeb3/admin/producto/listar.php" class="btn btn-secondary">Volver</a>
                <input type="submit" value="Modificar producto" class="btn btn-primary" name="modificar"><br><br>
            </div>
        </form>
    <?php else: ?>
        <p>El producto no existe.</p>
    <?php endif; ?>
</main>

<?php include "../../includes/templates/footer.php"; ?>