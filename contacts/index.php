<?php
	include('../clases/seguridad.php');
	if (file_exists("../modulos/header.php")){ include('../modulos/header.php'); }
?>
<div id="face_contact" class="row-fluid">Para nosotros es un gusto poder atenderle, por favor si tiene alguna inquietud o sugerencia no dude en contactarnos</div>
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
					<input type="text" name="" required="required">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Your E-mail:</label>
				<div class="controls">
					<input type="text" name="" required="required">
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