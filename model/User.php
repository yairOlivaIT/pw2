<?php


class User
{
    private $connexion;

    public function __construct($database){
        $this->connexion = $database;
    }

    public function getUsuarios()
    {
        return $this->connexion->query("SELECT * FROM users");
    }

    public function getUsuarioPorEmail($email){
        return $this->connexion->query("SELECT * FROM users WHERE users.email = '$email' ");
    }

    public function getEmpleado($id)
    {
        return $this->connexion->query("SELECT * FROM users JOIN empleados on users.empleado_id = empleados.id WHERE users.id = '$id'");
    }
}