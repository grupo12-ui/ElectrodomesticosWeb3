<?php
    $inicio=false;
    include "../../includes/templates/header.php";
    $a=$_POST['tot'] ??'';
    $b=$_POST['idv'] ??'';
    $c=$_POST['idc'] ??'';
    $d=$_POST['idp'] ??'';
    $e=$_POST['ids'] ??'';
   
    include"../../includes/config/database.php";
    $db=conectarDB();
    $consql="INSERT INTO venta(total,idvendedor,idcliente,idproducto,idsucursal,estado) values('$a','$b','$c','$d','$e','activo')";

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