<?php


class User
{
    private $connexion;

    public function __construct($database){
        $this->connexion = $database;
    }

    public function getUsuarios()
    {
        return $this->connexion->query("SELECT * FROM user");
    }

    public function getUsuarioPorEmail($email){
        return $this->connexion->query("SELECT * FROM user WHERE email = $email ");
    }
}