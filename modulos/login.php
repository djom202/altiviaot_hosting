<div id="login" class="row-fluid">
	<div id="socialmedia" class="span6">
		<div id="facebook" class="span1"><a href="https://facebook.com/pages/Altiviaot/102802866559001"><img src="../themes/images/facebook.png" alt=""></a></div>
		<div id="twitter" class="span1"><a href="http://twitter.com/altiviaot"><img src="../themes/images/twitter.png" alt=""></a></div>
	</div>
	<?php 
		if(!isset($_SESSION['user_id'])){
	?>
	<form action="../scripts/user_conexion.php">
		<input class="span2" type="text" name="username" placeholder="Username" required="required">
		<input class="span2" type="text" name="password" placeholder="********" required="required">
		<button class="btn btn-warning" type="submit" style="margin-bottom: 10px;"><i class="icon-user icon-white"></i> Log In</button>
		<button class="btn btn-success" type="button" style="margin-bottom: 10px;"><i class="icon-pencil icon-white"></i> Sign In</button>
	</form>
	<?php
		}
	?>
</div>