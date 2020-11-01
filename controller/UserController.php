<?php


class UserController
{
    private $renderer;
    private $model;

    public function __construct($renderer, $model){
        $this->renderer = $renderer;
        $this->model = $model;
    }

    public function index(){
        echo $this->renderer->render( "view/login.php");
    }

    public function registro(){
        echo $this->renderer->render( "view/registro.php");
    }

    public function login()
    {

    }

    public function home()
    {
        echo $this->renderer->render( "view/home.php");
    }

    public function logout()
    {

    }
}