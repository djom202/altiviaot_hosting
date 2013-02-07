<div id="menu" class="row-fluid">
	<div id="logo"><a href="./../home"><img src="../themes/images/logotipo.png" alt=""></a></div>
	<ul id="nav">
		<li<?php
		$cap = strrchr(getcwd(),"\ ");
		if ($cap=='\domains') echo ' class="current"';
	?>><a href="./../domains">domains</a></li>
		<li<?php
		$cap = strrchr(getcwd(),"\ ");
		if ($cap=='\hosting') echo ' class="current"';
	?>><a href="./../hosting">hosting</a></li>
		<li<?php
		$cap = strrchr(getcwd(),"\ ");
		if ($cap=='\reseller') echo ' class="current"';
	?>><a href="./../reseller">reseller</a></li>
		<li<?php
		$cap = strrchr(getcwd(),"\ ");
		if ($cap=='\support') echo ' class="current"';
	?>><a href="./../support">support</a></li>
		<li<?php
		$cap = strrchr(getcwd(),"\ ");
		if ($cap=='\contacts') echo ' class="current"';
	?>><a href="./../contacts">contacts</a></li>
	</ul>
</div>