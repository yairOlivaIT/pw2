<?php


class Mantenimiento
{
    private $connexion;

    public function __construct($database){
        $this->connexion = $database;
    }
}