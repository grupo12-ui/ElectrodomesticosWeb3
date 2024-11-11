<?php
include "../vista/usuarioNuevo.php";

if (isset($_POST['registrarUsu'])) {
    $e = $_POST['ema'];
    $p = $_POST['pas'];
    $r = $_POST['rol'];
    $pashas = password_hash($p, PASSWORD_DEFAULT);

    // Determinación del rol basado en el valor de $r
    if ($r == 1) {
        $rol = "Administrador";
    } elseif ($r == 2) {
        $rol = "Empleado";
    } else {
        $rol = "Usuario"; // Opcional: valor predeterminado si $r no es 1 ni 2
    }

    include "../modelo/usuario.php";
    $usu = new Usuario("", "", "", "", "");
    $registroExitoso = $usu->registrarUsuario($e, $pashas, $rol);

    if ($registroExitoso) {
        echo "
        <script>
            alert('Se registró correctamente');
            location.href = 'usuarioLista.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Error al registrar el usuario');
        </script>";
    }
}
?>
