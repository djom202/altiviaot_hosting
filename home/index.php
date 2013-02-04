<?php
	include('../clases/seguridad.php');
	if (file_exists("../modulos/header.php")){ include('../modulos/header.php'); }
	if (file_exists("../modulos/slide.php")){ include('../modulos/slide.php'); }
	if (file_exists("../modulos/planes1.php")){ include('../modulos/planes1.php'); }
	echo '<div class="row-fluid"></div>';
	if (file_exists("../modulos/footer.php")){ include('../modulos/footer.php'); }
?>