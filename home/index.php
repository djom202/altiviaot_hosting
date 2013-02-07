<?php
	include('../clases/seguridad.php');
	if (file_exists("../modulos/header.php")){ include('../modulos/header.php'); }
	if (file_exists("../modulos/slide.php")){ include('../modulos/slide.php'); }
	if (file_exists("../modulos/planes1.php")){ include('../modulos/planes1.php'); }
?>
<div id="registrodomain" class="row-fluid">
	<h3>Register Domian</h3>
	<div class="span3">
		<img src="../themes/images/1page-img.jpg" alt="" style="width: 16em;">
	</div>
	<div id="domianinfo" class="span8">
		<h4>las buenas ideas empiezan por un buen nombre</h4>
		<h5>ingrese los dominios que desea registrar o transferir</h5>
		<form action="../scripts/checkdomain.php" method="GET">
			<input type="text" name="website" placeholder="Enter your domain name" class="span7" required="required">
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
	<div class="span11">
		<p>Dominio es el nombre que tendrá su página web y sus correos electrónicos empresariales. Por ejemplo: sudominio.com y suempresa.com. Nosotros vendemos los dominios .com, .net, .org, .com.co, .co, etc. Si usted ya tiene el dominio no necesita comprarlo, puede hospedarlo en uno de nuestros planes de hosting o puede transferirlo a nuestra empresa.</p>
		<p>El dominio es uno de los activos más importantes de una empresa, ya que es la forma como se identifica en Internet y es la forma como sus clientes lo encontrarán y contactarán. Es muy importante que adquiera su dominio en una empresa confiable y con respaldo, preferiblemente en su mismo país para que pueda recibir un mejor soporte y una factura legal de este servicio.</p>
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
	echo '<div class="row-fluid"></div>';
	if (file_exists("../modulos/footer.php")){ include('../modulos/footer.php'); }
?>