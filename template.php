<!DOCTYPE html>
<html lang="es">
<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-theme.css" rel="stylesheet" media="screen">

    <!-- jQuery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <ul class="nav navbar-nav">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="index.php?route=unidades">Unidades</a></li>
            <li><a href="index.php?route=categorias">Categor&iacute;as</a></li>
            <li><a href="index.php?route=productos">Productos</a></li>
        </ul>
    </nav>
    <?php print $content; ?>
</div>
</body>
</html>