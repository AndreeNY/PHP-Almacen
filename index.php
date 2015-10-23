<?php
$route = isset($_GET['route']) ? $_GET['route'] : "welcome";

ob_start();
switch($route) {
    case "unidades":
        $title = "Unidades";
        include_once("unidades/index.php");
        $content = ob_get_contents();
        break;
    case "categorias":
        $title = "Categorías";
        include_once("categorias/index.php");
        $content = ob_get_contents();
        break;
    case "productos":
        $title = "Productos";
        include_once("productos/index.php");
        $content = ob_get_contents();
        break;
    case "productos/registrar":
        $title = "Registrar producto";
        include_once("productos/registrar.php");
        $content = ob_get_contents();
        break;
    case "productos/guardar":
        include_once("productos/guardar.php");
        break;
    default:
        $title = "Inicio";
        include_once("welcome.php");
        $content = ob_get_contents();
        break;
}
ob_end_clean();
include_once("template.php");