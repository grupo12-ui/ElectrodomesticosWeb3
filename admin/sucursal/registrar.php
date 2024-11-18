<?php
    $inicio=false;
    include "../../includes/templates/header.php";
    $a = $_POST['nom'] ??'';
    $b = $_POST['idv'] ??'';
    $c = $_POST['dir'] ??'';
    $d = $_POST['tel'] ??'';
    $e = $_POST['hor'] ??'';
    $f = $_POST['ifr'] ??'';

    include"../../includes/config/database.php";
    $db=conectarDB();
    $consql="INSERT INTO sucursal(nombre,idvendedor,direccion,telefono,horarios,iframe,estado) values('$a','$b','$c','$d','$e','$f','activo')";
    $res=mysqli_query($db,$consql);
    if ($res) {
      echo"<br><br><h3>Se registro</h3><br><br>
      <a href='/ElectrodomesticosWeb3/admin/indexAdmin.php' class='btn btn-secondary'>Volver</a><br><br>
      ";
    }else {
        echo "Error";
    }
    include "../../includes/templates/footer.php";
?>
