<?php


class Viaje
{
    private $connexion;

    public function __construct($database){
        $this->connexion = $database;
    }
}