<?php
	include('../clases/seguridad.php');
	if (file_exists("../modulos/header.php")){ include('../modulos/header.php'); }
	echo '<div id="slogan2" class="row-fluid"></div>';
	if (file_exists("../modulos/planes3.php")){ include('../modulos/planes3.php'); }
?>
<div id="reseller" class="row-fluid">
	<h2>Reseller</h2>
	<div class="row-fluid">
		<div class="span5"><img src="../themes/images/servidores.jpg" height="268" width="406" alt=""></div>
		<p class="span7">
			<strong>¿Qué es Hosting Revendedor?</strong><br>
			Los planes de revendedor le permiten la comercialización de servicios de hosting, mediante este servicio usted podrá tener cuentas de hosting hijas e independientes, a las cuales podrá asignarle los recursos que usted desee teniendo en cuenta el plan que contrate con nosotros. Los precios de los planes de hosting hijos son establecidos por usted.
			Usted contará con un panel de administración que le permitirá realizar la gestión de las cuentas hijas. Usted será el proveedor de su cliente y podrá solicitarnos soporte con respecto a algún inconveniente con alguna de sus cuentas hijas.
		</p>
	</div>
</div>
<?php if (file_exists("../modulos/footer.php")){ include('../modulos/footer.php'); } ?>