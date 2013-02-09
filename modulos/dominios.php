<div id="domains" class="row-fluid">
	<h3>Precios de Dominios</h3>
	<table class="offset1 table table-condensed table-striped" style="width: 89%;">
	    <thead>
	        <tr>
	            <th>Dominio</th>
	            <th>Años</th>
	            <th>Registrar</th>
	            <th>Transferir</th>
	            <th>Renovar</th>
	        </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    		$sql='SELECT `nombre`,`precio`,`transferir`,`renovar` FROM `dominios` WHERE `estado` = 1';
	    		include('../clases/sql.php');
				if (mysql_affected_rows() > 0) {
					while($row=mysql_fetch_array($result)){
						echo '<tr>';
						echo '<td>'.$row['nombre'].'</td>';
						echo '<td>1</td>';
						echo '<td>$'.$row['precio'].'</td>';
						echo '<td>$'.$row['transferir'].'</td>';
						echo '<td>$'.$row['renovar'].'</td>';
						echo '</tr>';
					}
				}
	    	?>
	        </tr>
	    </tbody>
	</table>
</div>