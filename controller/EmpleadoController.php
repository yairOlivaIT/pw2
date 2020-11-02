<?php


class EmpleadoController
{
    private $renderer;
    private $model;

    public function __construct($renderer, $model){
        $this->renderer = $renderer;
        $this->model = $model;
    }

    public function index(){
        echo $this->renderer->render( "view/empleado/index.php");
    }

    public function edit(){
        $id = $_GET["id"];
        $data["id"] = $id;
        echo $this->renderer->render( "view/empleado/edit.php", $data);
    }

    public function viajes(){
        $id = $_GET["id"];
        $data["id"] = $id;
        echo $this->renderer->render( "view/empleado/viajes.php", $data);
    }

    public function show(){
        $id = $_GET["id"];
        $data["id"] = $id;
        echo $this->renderer->render( "view/empleado/show.php", $data);
    }
}