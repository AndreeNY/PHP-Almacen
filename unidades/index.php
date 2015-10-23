<?php
    $f = fopen("data/unidades.csv", "r");
    $unidades = explode("\n",fread($f, filesize("data/unidades.csv")));
    fclose($f);
?>
<div class="form-box">
    <h2><?=$title?></h2>
    
    <a class="btn btn-primary" href="unidades/registrar"><span class="glyphicon glyphicon-plus"></span> Nueva unidad</a>
    <br><br>
    <table class="table table-bordered">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th></th>
        </tr>
        <?php foreach($unidades as $row) {
            $unidad = explode(",", $row);
            ?>
        <tr>
            <td><?=$unidad[0]?></td>
            <td><?=$unidad[1]?></td>
            <td class="cell-actions">
                <div class="btn-group">
                    <a class="btn btn-xs btn-warning" href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btn btn-xs btn-danger" href="#"><span class="glyphicon glyphicon-trash"></span></a>
                </div>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
