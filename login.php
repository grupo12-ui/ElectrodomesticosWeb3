<?php
require 'includes/config/database.php';
$db = conectarDB();
$errores = [];
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $e = $_POST['email'];
    $p = $_POST['pas'];

    if (!$e) {
        $errores[] = "El email es obligatorio.";
    } 
    if (!$p) {
        $errores[] = "El password es obligatorio.";
    }

    if (empty($errores)) {
        $con_sql = "SELECT * FROM usuarios WHERE email = '$e'";
        $res = mysqli_query($db, $con_sql);

        if ($res && $res->num_rows) {
            $usu = mysqli_fetch_array($res);

            $auth = password_verify($p, $usu['password']);

            if ($auth) {
                session_start();
                $_SESSION['usuario'] = $usu['email'];
                $_SESSION['login'] = true;

                header("Location: /bieenes");
                exit();
            } else {
                $errores[] = "La contraseña es incorrecta.";
            }
        } else {
            $errores[] = "El usuario no existe.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .contenedor {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .errores {
            background-color: #ffdddd;
            border-left: 4px solid #f44336;
            margin-bottom: 20px;
            padding: 10px;
        }
        .errores p {
            margin: 0;
            color: #d8000c;
        }
        .formulario fieldset {
            border: none;
            padding: 0;
        }
        .formulario label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        .formulario input[type="email"],
        .formulario input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .boton-verde {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .boton-verde:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<main class="contenedor">
    <h1>Iniciar Sesión</h1>

    <!-- Mostrar errores -->
    <?php if (!empty($errores)) : ?>
        <div class="errores">
            <?php foreach ($errores as $error) : ?>
                <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form method="POST" class="formulario">
        <fieldset>
            <legend>Información de Inicio de Sesión</legend>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>

            <label for="pas">Contraseña:</label>
            <input type="password" id="pas" name="pas" placeholder="Tu contraseña" required>
        </fieldset>

        <input type="submit" value="Iniciar sesión" class="boton-verde">
    </form>
</main>

</body>
</html>
