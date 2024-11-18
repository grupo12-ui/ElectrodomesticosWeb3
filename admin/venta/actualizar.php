<?php
$idvs = $_GET['cod'] ?? null;

if (!$idvs) {
    echo "<script>alert('Identificador no válido'); window.location.href = 'listar.php';</script>";
    exit;
}

require "../../includes/config/database.php";
$db = conectarDB();

$consql = "SELECT * FROM venta WHERE idventa = ?";
$stmt = mysqli_prepare($db, $consql);
mysqli_stmt_bind_param($stmt, 'i', $idvs);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$reg = mysqli_fetch_array($res);

if (isset($_POST['modificar'])) {
    $a=$_POST['tot'];
    $b=$_POST['idv'];
    $c=$_POST['idc'];
    $d=$_POST['idp'];
    $e=$_POST['ids'];

    $updateSql = "UPDATE venta SET total = ?, idvendedor = ?, idcliente = ?, idproducto = ? 
    , idsucursal = ? WHERE idventa = ?";
    $stmt = mysqli_prepare($db, $updateSql);
    mysqli_stmt_bind_param($stmt, 'diiiii', $a, $b, $c, $d, $e, $idvs);
    $res1 = mysqli_stmt_execute($stmt);

    if ($res) {
        echo "
        <script>
            alert('Se modificó');
            location.href = 'listar.php';
        </script>";
    } else {
        echo "Error al modificar el venta";
    
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
                <legend>Informacion General</legend>
                <label for="">Total:</label>
                <input type="number" name="tot" id="tot" step="0.01" value="<?php echo htmlspecialchars(number_format($reg['total'], 2, '.', '')); ?>">
                <label for="">IdVendedor:</label>
                <input type="number" name="idv" id="idv" value="<?php echo htmlspecialchars($reg['idvendedor']); ?>">
                <label for="">IdCliente:</label>
                <input type="number" name="idc" id="idc" value="<?php echo htmlspecialchars($reg['idcliente']); ?>">
                <label for="">IdProducto:</label>
                <input type="number" name="idp" id="idp" value="<?php echo htmlspecialchars($reg['idproducto']); ?>">
                <label for="">IdSucursal:</label>
                <input type="number" name="ids" id="ids" value="<?php echo htmlspecialchars($reg['idsucursal']); ?>">
            </fieldset>
 
            <div class="botones"><br>
                <a href="/ElectrodomesticosWeb3/admin/venta/listar.php" class="btn btn-secondary">Volver</a>
                <input type="submit" value="Modificar venta" class="btn btn-primary" name="modificar"><br><br>
            </div>
        </form>
    <?php else: ?>
        <p>La venta no existe.</p>
    <?php endif; ?>
</main>

<?php include "../../includes/templates/footer.php"; ?>