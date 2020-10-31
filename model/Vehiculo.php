<?php


class Vehiculo
{
    private $connexion;

    public function __construct($database){
        $this->connexion = $database;
    }

}