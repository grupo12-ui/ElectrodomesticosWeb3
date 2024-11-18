<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'conectar.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $clave = hash('sha256', $_POST['clave']); // Usar SHA-256 en lugar de MD5

    $sql = "SELECT * FROM usuario WHERE nombre_usuario = '$usuario' AND clave = '$clave'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows == 1) {
        $usuario_data = $resultado->fetch_assoc();
        $_SESSION['usuario'] = $usuario_data['usuario'];
        $_SESSION['rol'] = $usuario_data['rol'];
        header("Location: admin/indexAdmin.php");
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
    <div class="row">
        <div class="col-md-6">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                    <?php
                        // Para la primera imagen, se añade la clase "active"
                        echo "<div class='carousel-item active'>";
                        echo "<img src='build/img/imgProd/" . rand(1, 20) . ".png' class='d-block w-100' style='height:500px' >";
                        echo "</div>";

                        // Para las siguientes imágenes, no se usa "active"
                        for ($i = 2; $i <= 3; $i++) {
                            echo "<div class='carousel-item'>";
                            echo "<img src='build/img/imgProd/" . rand(1, 20) . ".png' class='d-block w-100' style='height:500px'>";
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <section class="container my-5">
                <h2>Iniciar Sesión</h2>
                <form method="post" action="login.php">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario:</label>
                        <input type="text" class="form-control" name="usuario" required><br>
                    </div>
                    

                    <label for="clave" class="form-label">Clave:</label>
                    <input type="password" class="form-control" name="clave" required><br>

                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </form>

                <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
            </section>
        </div>
    </div>
    
</body>
</html>

<?php
    incluirTemplate ('footer');
?>
