<?php
require_once("helper/Renderer.php");
include_once("helper/Database.php");
include_once("helper/Config.php");
require_once('third-party/mustache/src/Mustache/Autoloader.php');


class ModuleInitializer
{
    private $renderer;
    private $config;
    private $database;

    public function __construct()
    {
        $this->renderer = new Renderer('view/partial');
        $this->config = new Config("config/config.ini");
        $this->database = Database::createDatabaseFromConfig($this->config);
    }

    /*public function createPresentacionesController()
    {
        include_once("model/PresentacionesModel.php");
        include_once("controller/PresentacionesController.php");

        $model = new PresentacionesModel($this->database);
        return new PresentacionesController($model, $this->renderer);
    }*/

    public function createUserController()
    {
        include_once ("model/User.php");
        include_once("controller/UserController.php");

        $modelUser = new User($this->database);
        return new UserController($this->renderer, $modelUser);
    }

    public function createDefaultController()
    {
        return $this->createUserController();
    }
}