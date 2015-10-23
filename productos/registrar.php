<?php
$f = fopen("data/unidades.csv", "r");
$unidades = explode("\n",fread($f, filesize("data/unidades.csv")));
fclose($f);

$f = fopen("data/categorias.csv", "r");
$categorias = explode("\n",fread($f, filesize("data/categorias.csv")));
fclose($f);
?>
<form method="post" action="index.php?route=productos/guardar" class="form-box" role="form">
    <h2 class="form-signin-heading">Registrar Producto</h2>

    <div class="alert alert-danger" role="alert" style="display: none;">
        Faltan llenar datos
        <ul>

        </ul>
    </div>

    <label>Código del Producto</label>
    <input type="text" name="codigo" class="form-control" placeholder="PRD-001">

    <br>

    <label>Nombre del Producto</label>
    <input type="text" name="nombre" class="form-control">
    
    <br>
    
    <label>Marca</label>
    <input type="text" name="marca" class="form-control">
    
    <br>
    
    <label>Tipo de Producto</label>
    <br>
    <label class="checkbox-inline">
        <input type="radio" name="tipo" value="I"> Insumo
    </label>
    <label class="checkbox-inline">
        <input type="radio" name="tipo" value="F" checked="checked"> Producto final
    </label>
    
    <br><br>
    
    <label>Unidad de Medida</label>
    <select name="unidad" class="form-control">
        <?php foreach($unidades as $row) {
            $unidad = explode(",", $row);
        ?>
        <option value="<?=$unidad[0]?>"><?=$unidad[1]?></option>
        <?php } ?>
    </select>
    
    <br><br>
    
    <label>Categor&iacute;a</label>
    <select name="categoria" class="form-control">
        <?php foreach($categorias as $row) {
            $categoria = explode(",", $row);
        ?>
        <option value="<?=$categoria[0]?>"><?=$categoria[1]?></option>
        <?php } ?>
    </select>
    
    <br>
    
    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Guardar">
</form>