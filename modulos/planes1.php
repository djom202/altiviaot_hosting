<div id="planes" class="row-fluid">
<?php
	$sql='SELECT `nombre`,`discoduro`,`transferencia`,`basedatos`,`emails`,`ftp`,`precio` FROM `planes` WHERE `estado` = 1';
	include('../clases/sql.php');
	if (mysql_affected_rows() > 0) {
		while($row=mysql_fetch_array($result)){
			echo '<div class="plan span3">';
			echo '<header><span>Plan '.$row['nombre'].'</span></header><ul>';
			echo '<li>Disk space<span>'.$row['discoduro'].'</span></li>';
			echo '<li>Monthly transfer<span>'.$row['transferencia'].'</span></li>';
			echo '<li>FTP accounts<span>'.$row['ftp'].'</span></li>';
			echo '<li>Email boxes<span>'.$row['emails'].'</span></li></ul>';
			echo '<div class="price">'.$row['precio'].' Col</div>';
			echo '<input type="button" value="Learn More" class="btn btn-inverse"></div>';
		}
	}
?>
</div>