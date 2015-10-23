<form action="unidades/guardar<?= isset($unidad) ? "/$unidad->id_unidad" : "" ?>" method="post" class="form-box" role="form">
    <h2 class="form-signin-heading"><?=$title?></h2>
    
    <label>Código</label>
    <input type="text" name="id_unidad" class="form-control" placeholder="kg, und" <?= isset($unidad) ? "value=\"$unidad->id_unidad\" disabled" : "" ?>>
    
    <br>
    
    <label>Nombre o descripción</label>
    <input type="text" name="nombre" class="form-control" <?= isset($unidad) ? "value=\"$unidad->nombre\"" : "" ?>>
    
    <br>
    
    <div class="row">
        <div class="col-md-8">
            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Guardar">        
        </div>
        <div class="col-md-4">
            <a class="btn btn-lg btn-default btn-block" href="unidades">Cancelar</a>        
        </div>
    </div>
</form>