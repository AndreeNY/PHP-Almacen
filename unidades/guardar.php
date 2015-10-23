<?php

// si no proviene del formulario, redireccionar
if (sizeof($_POST) == 0) {
    header('Location: index.php?route=unidades');
}

$id_unidad = $_POST['id_unidad'];
$nombre = $_POST['nombre'];

$f = fopen("data/unidades.csv", "a");
fwrite($f, $id_unidad . ", " . $nombre . "\n");
fclose($f);

header('Location: index.php?route=unidades');