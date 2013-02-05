<?php
	include('../clases/seguridad.php');
	if (file_exists("../modulos/header.php")){ include('../modulos/header.php'); }
	if (file_exists("../modulos/slide.php")){ include('../modulos/slide.php'); }
	if (file_exists("../modulos/planes1.php")){ include('../modulos/planes1.php'); }
?>
<div id="registrodomain" class="row-fluid">
	<h3>Register Domian</h3>
	<div class="span2">
		<img src="../themes/images/1page-img.jpg" alt="">
	</div>
	<div class="span7">
		<form action="../scripts/checkdomain.php" method="GET">
			<input type="text" name="website" placeholder="Enter your domain name" class="span8" required="required">
			<!-- <button class="btn btn-warning" style="margin-bottom: 10px;" type="submit" name="search" value="ok"><i class="icon-search icon-white"></i></button> -->
			<div class="btn-group" data-toggle="buttons-radio">
				<?php 
					$sql='SELECT `nombre` FROM `dominios` WHERE `estado` = 1';
					include('../clases/sql.php');
					$cont=0;
					if (mysql_affected_rows() > 0) {
						while($row=mysql_fetch_array($result)){
							if ($cont==0) {
								echo '<button name="dominio" class="btn btn-inverse" value="'.$row['nombre'].'">'.$row['nombre'].'</button>';
								$cont=1;
							}else{
								echo '<button name="dominio" class="btn btn-inverse" value="'.$row['nombre'].'">'.$row['nombre'].'</button>';
							}
						}
					}
				?>
			</div>
		</form>
	</div>
</div>
<?php
	if (isset($_REQUEST['query'])) {
		echo '<div id="request" class="row-fluid">';
		echo $_REQUEST['query'];
		if (file_exists("../modulos/whois.php")){ include('../modulos/whois.php'); }
		echo '</div>';
	}
?>
<?php
	if (!isset($_REQUEST['query'])) {
		if (file_exists("../modulos/dominios.php")){ include('../modulos/dominios.php'); }
	}
?>


<?php 
	echo '<div class="row-fluid"></div>';
	if (file_exists("../modulos/footer.php")){ include('../modulos/footer.php'); }
?>