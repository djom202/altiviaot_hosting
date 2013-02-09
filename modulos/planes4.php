<div id="infoplanes" class="row-fluid">
<?php
	$sql='SELECT `id`,`nombre`,`precio` FROM `planes_reseller` WHERE `estado` = 1';
	include('../clases/sql.php');
	if (mysql_affected_rows() > 0) {
		while($row=mysql_fetch_array($result)){
			echo '<div class="plans span4"><a href="../plans_reseller/level_'.$row['id'].'.php"><header><span>Plan '.$row['nombre'].'</span><br>$'.$row['precio'].' Col</header></a></div>';
		}
	}
?>
</div>
