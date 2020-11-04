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

    public function login()
    {

    }

    public function home()
    {
        echo $this->renderer->render( "view/inicio/home.php");
    }

    public function logout()
    {

    }
}