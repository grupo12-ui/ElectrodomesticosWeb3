<?php
    include "../modelo/usuario.php";
    
    $us = new Usuario("", "", "", "", "");
    $res = $us->listaUsuario();

    // Aseguramos que $res sea accesible en la vista
    include "../vista/mostrarListaUsr.php";
?>
