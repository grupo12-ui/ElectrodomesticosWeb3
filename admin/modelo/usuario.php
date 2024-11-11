<?php
class Usuario
{
    protected $id;
    protected $email;
    protected $contrasena;
    protected $estado;
    protected $rol;

    public function __construct($id, $email, $contrasena, $estado, $rol)
    {
        $this->id = $id;
        $this->email = $email;
        $this->contrasena = $contrasena;
        $this->estado = $estado;
        $this->rol = $rol;
    }
    public function listaUsuario()
    {
        include "conexion.php";
        $db = conectarDB();
        $res = $db->query("SELECT * FROM usuarios WHERE estado LIKE 'Activo'");
        return $res;
    }
    public function registrarUsuario($e,$p,$r){
        include "conexion.php";
        $db = conectarDB();
        $res = $db->query("INSERT INTO usuarios (email,password,estado,rol) values ('$e','$p','Activo','$r')");
        return $res;

    }
}
?>
