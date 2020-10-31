<?php


class Reporte
{
    private $connexion;

    public function __construct($database){
        $this->connexion = $database;
    }
}