<?php
	include('../clases/seguridad.php');
	if (file_exists("../modulos/header.php")){ include('../modulos/header.php'); }
?>
<div id="slogan" class="row-fluid">
		<article>
			<header>your domain name <span>helps the world to find you</span></header>
			<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
		</article>
</div>
<div id="infoplanes" class="row-fluid">
	<div class="plans span3">
		<header><span>Basico</span><br>$50.000 col</header>
	</div>
	<div class="plans span3">
		<header><span>Economico</span><br>$50.000 col</header>
	</div>
	<div class="plans span3">
		<header><span>Delujo</span><br>$50.000 col</header>
	</div>
	<div class="plans span3">
		<header><span>Ilimitado</span><br>$50.000 col</header>
	</div>
</div>
<div id="contacts" class="row-fluid">
	<div class="offset2 span3">
		<h3>Postal Address</h3>
		<label><strong>Zip Code:</strong> 08001000</label>
		<label><strong>Country:</strong> Barranquilla</label>
		<label><strong>Telephone:</strong> (+57) 301-444-2072</label>
		<label><strong>Email:</strong> <a href="mailto:info@altiviaot.com">info@altiviaot.com</a></label>
	</div>
	<div class="span6">
		<h3 class="offset1">Contact Form</h3>
		<form action="" class="form-horizontal">
			<div class="control-group">
				<label class="control-label">Your name:</label>
				<div class="controls">
					<input type="text" name="" id="">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Your E-mail:</label>
				<div class="controls">
					<input type="text" name="" id="">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Your message:</label>
				<div class="controls">
					<textarea name="" id="" cols="30" rows="10"></textarea>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<button type="button" class="btn">Cancelar</button>
					<button type="button" class="btn btn-warning"><i class="icon-envelope icon-white"></i> Enviar</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php if (file_exists("../modulos/footer.php")){ include('../modulos/footer.php'); } ?>