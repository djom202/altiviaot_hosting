<?php
	if (isset($_REQUEST['website'])==1 && isset($_REQUEST['dominio'])==1) {
		$pagina=$_REQUEST['website'].$_REQUEST['dominio'];

		if (@fopen('http://www.'.$pagina,'r')){
			$query='<p class="text-error"><strong>¡Lo Lamentamos! '.$pagina.' ¡ya está registrado!</strong></p><br>';
			$estado='<span class="label label-important">No disponible</span>';
		}else{
			$query='<p class="text-success"><strong>¡Felicidades! '.$pagina.' ¡está disponible!</strong></p><br>';
			$estado='<span class="label label-success">Disponible</span>';
		}
		header('location: ../home/?query='.$query.'&pagina='.$pagina.'&estado='.$estado);
	}
?>