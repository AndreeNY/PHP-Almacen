<?php
$route = isset($_GET['route']) ? $_GET['route'] : "welcome";

ob_start();
switch($route) {
    case "unidades":
        $title = "Registrar Unidades";
        include_once("unidades/editar.php");
        break;
    case "unidades/registrar":
        $title = "Unidades";
        include_once("unidades/index.php");
        break;
    case "unidades/guardar":
        include_once("unidades/guardar.php");
        break;
    case "categorias":
        $title = "Categorías";
        include_once("categorias/index.php");
        break;
    case "categorias/registrar":
        $title = "Registrar Categorías";
        include_once("categorias/editar.php");
        break;
    case "categorias/guardar":
        $title = "Guardar Categorías";
        include_once("categorias/guardar.php");
        break;
    case "productos":
        $title = "Productos";
        include_once("productos/index.php");
        break;
    case "productos/registrar":
        $title = "Registrar producto";
        include_once("productos/registrar.php");
        break;
    case "productos/guardar":
        include_once("productos/guardar.php");
        break;
    default:
        $title = "Inicio";
        include_once("welcome.php");

        break;
}
$content = ob_get_contents();
ob_end_clean();
include_once("template.php");