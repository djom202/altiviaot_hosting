<?php
	$link = mysql_connect("127.0.0.1","root",""); 
	if(!$link){ 
		$my_error='Conexion NO exitosa.<br/>'.mysql_error();
		header('location: ../errores/no_url.php?error='.$my_error);
	}else{ mysql_select_db("hosting", $link); }
?>