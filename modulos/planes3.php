<div id="planes" class="row-fluid">
<?php
	$sql='SELECT `id`,`nombre`,`discoduro`,`transferencia`,`cuentas`,`precio` FROM `planes_reseller` WHERE `estado` = 1';
	include('../clases/sql.php');
	while($row=mysql_fetch_array($result)){
		echo '<div class="plan_reseller span4">';
		echo '<header><span>Plan '.$row['nombre'].'</span></header><ul>';
		echo '<li>Disk space<span>'.$row['discoduro'].'</span></li>';
		echo '<li>Monthly transfer<span>'.$row['transferencia'].'</span></li>';
		echo '<li>Accounts<span>'.$row['cuentas'].'</span></li>';
		echo '<div class="price">$'.$row['precio'].' Col</div>';
		echo '<a href="../plans_reseller/level_'.$row['id'].'.php" class="btn btn-inverse">Learn More</a></div>';
	}
?>
</div>