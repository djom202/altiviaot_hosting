<?php
	include('../clases/seguridad.php');
	if (file_exists("../modulos/header.php")){ include('../modulos/header.php'); }
	if (file_exists("../modulos/slogan.php")){ include('../modulos/slogan.php'); }
	if (file_exists("../modulos/planes2.php")){ include('../modulos/planes2.php'); }
?>
<div id="hosting" class="row-fluid">
	<h2>Hosting</h2>
	<div class="row-fluid">
		El hosting es un servicio que le permitirá publicar su página web en Internet, tener sus correos electrónicos con el nombre de su empresa, entre otras muchas más aplicaciones. Un hosting debe ir en conjunto con un dominio para que su página web y sus correos queden con el nombre de su empresa, por ejemplo: www.suempresa.com y gerencia@suempresa.com.
		En otras palabras un plan de hosting es un espacio que se encuentra en servidores conectados 24 horas al día a Internet, permitiendole que los usuarios puedan visitar su página en cualquier momento. Todos nuestros planes de hosting se encuentran en servidores de alto rendimiento, con redundancia en almacenamiento y con copias de seguridad diarias en otro centro de datos. Nosotros ofrecemos hosting en linux, hosting en windows y hosting dedicado.<br><br>
	</div>
	<div class="row-fluid">
		<div class="span1">
			<img src="../themes/images/cpanel.png" alt="" style="width: 76px;">
		</div>
		<p class="span11">
			cPanel y Fantastico
			Administre usted mismo su cuenta de hosting (cree cuentas de correo, suba su página) e instale docenas de aplicaciones de código abierto como (Joomla, Wordpress, Carros de Compras, etc) con un par de clics.
		</p>
	</div>
	<div class="row-fluid">
		<div class="span1">
			<img src="../themes/images/user.png" alt="" style="width: 76px;">
		</div>
		<p class="span11">
			Usted es el dueño de su dominio
			Los dominios que usted registre con nosotros quedarán registrados a su nombre y su información podrá ser consultada haciendo un whois al dominio. Mediante nuestro panel de administración usted podrá apuntar su dominio a otro proveedor en el momento en que lo desee.
		</p>
	</div>
	<a href="./../hosting_plans/" class="btn btn-inverse">Mas detalles de nuestros Hostig</a>
</div>
<div class="row-fluid"></div>
<?php if (file_exists("../modulos/footer.php")){ include('../modulos/footer.php'); } ?>