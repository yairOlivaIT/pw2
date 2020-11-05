<?php

class Router{
    public static function executeActionFromController($moduleInitializer, $module, $action = "index"){
        $controller = self::createControllerFrom($moduleInitializer, $module);
        self::ejecutarMetodo($controller, $action);
    }

    private static function createControllerFrom($moduleInitializer,$module){
        $controllerName = self::createControllerNameFromModule($module);
        return self::ejecutarMetodo($moduleInitializer, $controllerName);
    }

    private static  function createControllerNameFromModule($module){
        return "create" . ucfirst($module) . "Controller";
    }

    private static function ejecutarMetodo($clase, $metodo)
    {
        try {
            $validAction = self::verificar($clase, $metodo);
            return self::llamarMetodo($clase, $validAction);
        }
        catch (Exception $e){
            /*echo ("Error 404");*/
            require_once("ModuleInitializer.php");
            $controller = self::llamarMetodo(new ModuleInitializer(), "createExcepcionesController");
            self::llamarMetodo($controller, "index");
            die();
        }
    }

    private static function verificar($fuente, $buscar)
    {
        if (method_exists($fuente, $buscar)){
            return $buscar;
        }

        throw new Exception("Error 404");
    }

    private static function llamarMetodo($fuente, $metodo)
    {
        return call_user_func(array($fuente, $metodo));
    }
}