<?php
	include('../clases/seguridad.php');
	if (file_exists("../modulos/header.php")){ include('../modulos/header.php'); }
?>
<div id="slide" class="row-fluid">
	<div class="span9" style="float: right;">
		<img src="../themes/images/slider-bg.jpg" alt="" style="height: 23.7em;margin-left: -2%;max-width: 102%!important;">
	</div>
	<div class="span3" style="float: left;margin-left: 1%;">
		<div class="selector current row-fluid">Web Hosting<br>
			<span>Get more information</span>
		</div>
		<div class="selector row-fluid">Broadband<br>
			<span>Get more information</span>
		</div>
		<div class="selector row-fluid">Email Hosting<br>
			<span>Get more information</span>
		</div>
		<div class="selector row-fluid">Dedicated<br>
			<span>Get more information</span>
		</div>
	</div>
</div>
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
<div class="row-fluid"></div>
<?php if (file_exists("../modulos/footer.php")){ include('../modulos/footer.php'); } ?>