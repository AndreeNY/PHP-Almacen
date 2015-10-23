<?php

// si no proviene del formulario, redireccionar
if (sizeof($_POST) == 0) {
    header('Location: index.php?route=productos');
}


header('Location: index.php?route=productos');