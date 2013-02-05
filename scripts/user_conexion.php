<?php 
	if (isset($_REQUEST['username'])==1 && isset($_REQUEST['username'])==1) {
		include('../clases/conexion.php');
		$sql='SELECT `id`, CONCAT(`nombre`," ",`apellido`) as nombre,`correo` FROM `usuarios` WHERE `estado` = 1 AND `online` = 0 AND `user`="'.$_REQUEST['username'].'" AND `pass`="'.md5($_REQUEST['password']).'"';
		include('../clases/sql.php');
		if (mysql_affected_rows() > 0) {
			if($row=mysql_fetch_array($result)){
				session_start();
				$_SESSION['user_id']=$row['id'];
				$_SESSION['user_name']=$row['nombre'];
				$_SESSION['user_email']=$row['correo'];
				header('location: ../home');
			}
		}
	}
?>