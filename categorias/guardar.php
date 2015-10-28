<?php

// si no proviene del formulario, redireccionar
if (sizeof($_POST) == 0) {
    header('Location: index.php?route=categorias');
}

$codigo= $_POST['codigo'];
$nombre= $_POST['nombre'];

$f = fopen("data/categorias.csv", "a");
fwrite($f, rand(1, 10) . $codigo . ", " . $nombre . "\n");
fclose($f);

header('Location: index.php?route=categorias');
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 28/10/2015
 * Time: 05:52 PM
 */