<?php
	$link = mysql_connect("probandoando.com","probando_web","3014442072"); 
	if(!$link){ 
		echo "Conexion NO exitosa.<br/>";
		echo mysql_error();
	}else{ mysql_select_db("probando_prueba",$link); }
?>