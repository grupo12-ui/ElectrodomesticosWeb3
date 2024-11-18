<?php
    $inicio = false;
    include "../../includes/templates/header.php";
    $n = $_POST['nom'];
    $m = $_POST['mrc'];
    $c = $_POST['cat'];
    $p = $_POST['pre'];
    $s = $_POST['stk'];

    require "../../includes/config/database.php";
    $db = conectarDB();
    $con_sql = "INSERT INTO producto (nombre, marca, categoria, precio, stock) VALUES ('$n', '$m', '$c', '$p', '$s')";

    $res = mysqli_query($db, $con_sql);
    if ($res) {
        echo"Se registro";
        echo"<br><br><h3>Se registro</h3><br><br>
        <a href='/ElectrodomesticosWeb3/admin/indexAdmin.php' class='btn btn-secondary'>Volver</a><br><br>
        ";
    } else {
        echo "<p>Error al registrar la producto.</p>";
    }
?>