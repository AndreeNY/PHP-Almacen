<form action="index.php?route=categorias/guardar" method="post" class="form-box" role="form">
    <h2 class="form-signin-heading"><?=$title?></h2>
    
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" <?= isset($categoria) ? "value=\"$categoria->nombre\"" : "" ?>>
    
    <br>
    
    <div class="row">
        <div class="col-md-8">
            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Guardar">        
        </div>
        <div class="col-md-4">
            <a class="btn btn-lg btn-default btn-block" href="categorias">Cancelar</a>        
        </div>
    </div>
</form>