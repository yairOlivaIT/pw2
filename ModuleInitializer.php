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

    public function createRegistroController()
    {
        include_once ("model/User.php");
        include_once("controller/RegistroController.php");

        $modelUser = new User($this->database);
        return new RegistroController($this->renderer, $modelUser);
    }

    public function createEmpleadoController()
    {
        include_once ("model/Empleado.php");
        include_once("controller/EmpleadoController.php");

        $modelEmpleado = new Empleado($this->database);
        return new EmpleadoController($this->renderer ,$modelEmpleado);
    }

    public function createViajeController()
    {
        include_once ("model/Viaje.php");
        include_once("controller/ViajeController.php");

        $modelViaje = new Viaje($this->database);
        return new ViajeController($this->renderer, $modelViaje);
    }

    public function createVehiculoController()
    {
        include_once ("model/Vehiculo.php");
        include_once("controller/VehiculoController.php");

        $modeloVehiculo = new Vehiculo($this->database);
        return new VehiculoController($this->renderer, $modeloVehiculo);
    }

    public function createReporteController()
    {
        include_once ("model/Reporte.php");
        include_once("controller/ReporteController.php");

        $modelReporte = new Reporte($this->database);
        return new ReporteController($this->renderer, $modelReporte);
    }

    public function createSeguimientoController()
    {
        include_once ("model/Seguimiento.php");
        include_once("controller/SeguimientoController.php");

        $modelSeguimiento = new Seguimiento($this->database);
        return new SeguimientoController($this->renderer, $modelSeguimiento);
    }

    public function createMantenimientoController()
    {
        include_once ("model/Mantenimiento.php");
        include_once("controller/MantenimientoController.php");

        $modelMantenimiento = new Mantenimiento($this->database);
        return new MantenimientoController($this->renderer, $modelMantenimiento);
    }

    public function createExcepcionesController()
    {
        include_once("controller/ExcepcionesController.php");

        return new ExcepcionesController($this->renderer);
    }

    public function createDefaultController()
    {
        return $this->createUserController();
    }
}