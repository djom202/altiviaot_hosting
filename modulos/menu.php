<div id="menu" class="row-fluid">
	<div id="logo"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/web_hosting/home"><img src="../themes/images/logotipo.png" alt=""></a></div>
	<ul id="nav">
		<li<?php
		$cap = strrchr(getcwd(),"\ ");
		if ($cap=='\service') echo ' class="current"';
	?>><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/web_hosting/service">service</a></li>
		<li<?php
		$cap = strrchr(getcwd(),"\ ");
		if ($cap=='\hosting') echo ' class="current"';
	?>><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/web_hosting/hosting">hosting</a></li>
		<li<?php
		$cap = strrchr(getcwd(),"\ ");
		if ($cap=='\solutions') echo ' class="current"';
	?>><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/web_hosting/solutions">solutions</a></li>
		<li<?php
		$cap = strrchr(getcwd(),"\ ");
		if ($cap=='\support') echo ' class="current"';
	?>><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/web_hosting/support">support</a></li>
		<li<?php
		$cap = strrchr(getcwd(),"\ ");
		if ($cap=='\contacts') echo ' class="current"';
	?>><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/web_hosting/contacts">contacts</a></li>
	</ul>
</div>