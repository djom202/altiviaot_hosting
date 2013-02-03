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
	<div class="plan span3">
		<header><span>Plan Basico</span></header>
		<ul>
			<li>Disk space<span>50GB</span></li>
			<li>Monthly transfer<span>1000GB</span></li>
			<li>FTP accounts<span>25</span></li>
			<li>Email boxes<span>1000</span></li>
			<li>Free domains<span>1</span></li>
		</ul>
		<div class="price">$50.000 Col</div>
		<input type="button" value="Learn More" class="btn btn-inverse">
	</div>
	<div class="plan span3">
		<header><span>Plan Economico</span></header>
		<ul>
			<li>Disk space<span>50GB</span></li>
			<li>Monthly transfer<span>1000GB</span></li>
			<li>FTP accounts<span>25</span></li>
			<li>Email boxes<span>1000</span></li>
			<li>Free domains<span>1</span></li>
		</ul>
		<div class="price">$50.000 Col</div>
		<input type="button" value="Learn More" class="btn btn-inverse">
	</div>
	<div class="plan span3">
		<header><span>Plan Delujo</span></header>
		<ul>
			<li>Disk space<span>50GB</span></li>
			<li>Monthly transfer<span>1000GB</span></li>
			<li>FTP accounts<span>25</span></li>
			<li>Email boxes<span>1000</span></li>
			<li>Free domains<span>1</span></li>
		</ul>
		<div class="price">$50.000 Col</div>
		<input type="button" value="Learn More" class="btn btn-inverse">
	</div>
	<div class="plan span3">
		<header><span>Plan Ilimitado</span></header>
		<ul>
			<li>Disk space<span>50GB</span></li>
			<li>Monthly transfer<span>1000GB</span></li>
			<li>FTP accounts<span>25</span></li>
			<li>Email boxes<span>1000</span></li>
			<li>Free domains<span>1</span></li>
		</ul>
		<div class="price">$50.000 Col</div>
		<input type="button" value="Learn More" class="btn btn-inverse">
	</div>
</div>
<div class="row-fluid"></div>
<?php if (file_exists("../modulos/footer.php")){ include('../modulos/footer.php'); } ?>