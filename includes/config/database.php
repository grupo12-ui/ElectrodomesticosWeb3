<?php
    $DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PASSWORD = '';  // Cambiar si tienes una contraseña configurada en MySQL
    $DB_NAME = 'electrohogar';
    $conexion = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
    
    function conectarDB(){
        $db=mysqli_connect("localhost","root","","electrohogar");
        return $db;
    }

?>