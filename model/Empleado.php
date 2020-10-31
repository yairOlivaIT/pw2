<?php


class Empleado
{
    private $connexion;

    public function __construct($database){
        $this->connexion = $database;
    }
}