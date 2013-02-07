<?php
	include('../clases/seguridad.php');
	if (file_exists("../modulos/header.php")){ include('../modulos/header.php'); }
	if (file_exists("../modulos/slogan.php")){ include('../modulos/slogan.php'); }
?>
<div id="domains" class="row-fluid">
	<?php if (file_exists("../modulos/dominios.php")){ include('../modulos/dominios.php'); } ?>
</div>
<?php if (file_exists("../modulos/footer.php")){ include('../modulos/footer.php'); } ?>