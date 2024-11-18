<?php
    $inicio=false;
    include "../../includes/templates/header.php";
    $no=$_POST['nom'] ??'';
    $pa=$_POST['pat'] ??'';
    $ma=$_POST['mat'] ??'';
    $tel=$_POST['tel'] ??'';
   
    include"../../includes/config/database.php";
    $db=conectarDB();
    $consql="INSERT INTO vendedor(nombre,paterno,materno,telefono,estado) values('$no','$pa','$ma','$tel','activo')";

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
