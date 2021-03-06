<?php
require_once("ModuleInitializer.php");
require_once("Router.php");

session_start();

$module = isset($_GET["module"]) && !empty($_GET["module"])? $_GET["module"] : "user";
$action = isset($_GET["action"]) ? $_GET["action"] : "index";

$moduleInitializer = new ModuleInitializer();
Router::executeActionFromController($moduleInitializer, $module, $action);

