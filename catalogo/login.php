<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $clave = md5($_POST['clave']);

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows == 1) {
        $usuario_data = $resultado->fetch_assoc();
        $_SESSION['usuario'] = $usuario_data['usuario'];
        $_SESSION['rol'] = $usuario_data['rol'];
        header("Location: index.php");
        exit();
    } else {
        $error = "Usuario o clave incorrecta.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <h2>Iniciar Sesión</h2>
    <form method="post" action="login.php">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required><br>

        <label for="clave">Clave:</label>
        <input type="password" name="clave" required><br>

        <button type="submit">Iniciar Sesión</button>
    </form>

    <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
</body>
</html>
