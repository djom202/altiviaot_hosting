<div id="infoplanes" class="row-fluid">
<?php
	$sql='SELECT `nombre`,`precio` FROM `planes_hosting` WHERE `estado` = 1';
	include('../clases/sql.php');
	if (mysql_affected_rows() > 0) {
		while($row=mysql_fetch_array($result)){
			echo '<div class="plans span3"><a href="../plans_hosting/'.$row['nombre'].'.php"><header><span>Plan '.$row['nombre'].'</span><br>$'.$row['precio'].' Col</header></a></div>';
		}
	}
?>
</div>
