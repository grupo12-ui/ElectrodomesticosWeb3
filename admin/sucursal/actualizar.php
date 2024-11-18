<?php
$ids = $_GET['cod'] ?? null;

if (!$ids) {
    echo "<script>alert('Identificador no válido'); window.location.href = 'listar.php';</script>";
    exit;
}

require "../../includes/config/database.php";
$db = conectarDB();

$consql = "SELECT * FROM sucursal WHERE idsucursal = ?";
$stmt = mysqli_prepare($db, $consql);
mysqli_stmt_bind_param($stmt, 'i', $ids);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$reg = mysqli_fetch_array($res);

if (isset($_POST['modificar'])) {
    $a = $_POST['nom'];
    $b = $_POST['idv'];
    $c = $_POST['dir'];
    $d = $_POST['tel'];
    $e = $_POST['hor'];
    $f = $_POST['ifr'];

    $updateSql = "UPDATE sucursal SET nombre = ?, idvendedor = ?, direccion = ?, 
        telefono = ?, horarios = ?,iframe = ? WHERE idsucursal = ?";
    $stmt = mysqli_prepare($db, $updateSql);
    mysqli_stmt_bind_param($stmt, 'sisissi', $a, $b, $c, $d, $e, $f,$ids);
    $res1 = mysqli_stmt_execute($stmt);

    if ($res) {
        echo "
        <script>
            alert('Se modificó');
            location.href = 'listar.php';
        </script>";
    } else {
        echo "Error al modificar el sucursal";
    
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

                <label for="pat">IdVendedor</label>
                <input type="text" name="idv" id="idv" value="<?php echo htmlspecialchars($reg['idvendedor']); ?>">

                <label for="mat">Direccion</label>
                <input type="text" name="dir" id="dir" value="<?php echo htmlspecialchars($reg['direccion']); ?>">

                <label for="mat">Teléfono</label>
                <input type="number" name="tel" id="tel" value="<?php echo htmlspecialchars($reg['telefono']); ?>">

                <label for="tel">Horarios</label>
                <input type="text" name="hor" id="hor" value="<?php echo htmlspecialchars($reg['horarios']); ?>">
                
                <label for="tel">IFrame</label>
                <input type="text" name="ifr" id="ifr" value="<?php echo htmlspecialchars($reg['iframe']); ?>">
            </fieldset>
 
            <div class="botones"><br>
                <a href="/ElectrodomesticosWeb3/admin/sucursal/listar.php" class="btn btn-secondary">Volver</a>
                <input type="submit" value="Modificar sucursal" class="btn btn-primary" name="modificar"><br><br>
            </div>
        </form>
    <?php else: ?>
        <p>El sucursal no existe.</p>
    <?php endif; ?>
</main>

<?php include "../../includes/templates/footer.php"; ?>