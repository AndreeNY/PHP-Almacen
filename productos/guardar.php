<?php

// si no proviene del formulario, redireccionar
if (sizeof($_POST) == 0) {
    header('Location: index.php?route=productos');
}

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$categoria = $_POST['categoria'];
$unidad = $_POST['unidad'];

$f = fopen("data/productos.csv", "a");
fwrite($f, $codigo . ", " . $nombre . ", " . $marca . ", " . $categoria . "," . $unidad . "\n");
fclose($f);

header('Location: index.php?route=productos');