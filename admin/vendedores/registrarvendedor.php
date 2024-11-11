<?php
    $inicio=false;
    include "../../includes/templates/header.php";
    $no=$_POST['nom'];
    $pa=$_POST['pat'];
    $ma=$_POST['mat'];
   
    include"../../includes/config/database.php";
    $db=conectarBD();
    $consql="INSERT INTO vendedores(nombre,paterno,materno,telefono,estado) values('$no','$pa','$ma','Activo')";
    $res=mysqli_query($db,$consql);
    if ($res) {
      echo"SE registro";
    }else {
        echo "Error";
    }
    include "../../includes/templates/footer.php";
?>