<?php


class Seguimiento
{
    private $connexion;

    public function __construct($database){
        $this->connexion = $database;
    }
}