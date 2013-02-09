<?php
	include('../clases/seguridad.php');
	if (file_exists("../modulos/header.php")){ include('../modulos/header.php'); }
	if (file_exists("../modulos/slogan.php")){ include('../modulos/slogan.php'); }
	if (file_exists("../modulos/planes4.php")){ include('../modulos/planes4.php'); }
?>
<div id="plansinfo" class="row-fluid">
<?php
	$sql='SELECT `id`,`nombre`,`discoduro`,`transferencia`,`cuentas`,`precio` FROM `planes_reseller` WHERE `estado` = 1 AND `id` = 3';
	include('../clases/sql.php');
	if (mysql_affected_rows() > 0) {
		if($row=mysql_fetch_array($result)){
			echo '<h2>'.$row['nombre'].'</h2>';
			echo '<p>Con nuestras soluciones de hosting usted tendrá un panel de control desde donde podrá crear cuentas de correo, ftp, subdominios, entre otros. Adicionalmente, nuestros paneles vienen en 14 diferentes lenguajes, ¿Excelente, cierto?Nuestros servicios de alojamiento web están orientados a webmasters que inician en el mundo de la web y desean una solución consolidada para sus dominios que le brinde poder, seguridad y disponibilidad a su sitio web. El panel es totalmente marca blanca lo que permitirá revender el servicio si así lo desea. Además contará con la galería de scripts gnu más sencilla y potente del planeta.¡Tú eres lo más importante! para mejorar la experiencia de nuestros usuarios.</p><h4>Especificaciones</h4>';
			echo '<ul><li>'.$row['discoduro'].' Disk space</li>';
			echo '<li>'.$row['transferencia'].' Monthly transfer</li>';
			echo '<li>'.$row['cuentas'].' Accounts</li>';
			echo '<li>100 Email by User</li>';
			echo '<li>Database MySQL</li>';
			echo '<li>PHP5</li>';
			echo '<li>cPanel</li></ul>';
			echo '<button class="bnt btn-inverse btn-large">Buy for only '.$row['precio'].' Col.</button>';
		}
	}
?>
</div>
<?php 
	echo '<div class="row-fluid"></div>';
	if (file_exists("../modulos/footer.php")){ include('../modulos/footer.php'); }
?>