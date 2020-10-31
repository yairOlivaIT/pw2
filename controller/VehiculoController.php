<?php


class VehiculoController
{
    private $renderer;
    private $model;

    public function __construct($renderer, $model){
        $this->renderer = $renderer;
        $this->model = $model;
    }

    public function index(){
        echo $this->renderer->render( "view/vehiculo/index.php");
    }
}