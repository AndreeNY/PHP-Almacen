<?php

?>
<div class="form-box">
    <h2><?=$title?></h2>
    
    <div class="row">
    	<div class="col-md-4">
    		<a class="btn btn-primary" href="categorias/registrar"><span class="glyphicon glyphicon-plus"></span> Nueva categor&iacute;a</a>
    	</div>
    	<div class="col-md-8">
    		<div class="pull-right">
	    		<form class="form-inline" role="form">
	    			<input type="text" class="form-control form-search" id="buscar" placeholder="Buscar...">
	    			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
	    		</form>
    		</div>
    	</div>
    </div>
    <br><br>
    <table class="table table-bordered">
    	<thead>
	        <tr>
				<th>Código</th>
				<th>Nombre</th>
	            <th></th>
	        </tr>
        </thead>
        <tbody>
	        <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
		        <td class="cell-actions">
		            <div class="btn-group">
		                <a class="btn btn-xs btn-warning" href="#"><span class="glyphicon glyphicon-pencil"></span></a>
		                <a class="btn btn-xs btn-danger" href="#"><span class="glyphicon glyphicon-trash"></span></a>
		            </div>
		        </td>
		    </tr>
        </tbody>
    </table>
    <div class="text-center">
		<ul class="pagination">
			<li><a class="page" href="#">&nbsp;</a></li>
		</ul>
	</div>
</div>