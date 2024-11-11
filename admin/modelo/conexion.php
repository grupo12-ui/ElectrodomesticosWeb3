<?php
    function conectarDB(){
        $db=mysqli_connect("localhost","root","","electroh");
        return $db;
    }

?>