<?php
    function conectarDB(){
        $db=mysqli_connect("localhost","root","","electrohogar");
        return $db;
    }

?>