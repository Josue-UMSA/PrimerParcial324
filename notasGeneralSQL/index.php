<?php 
include '../parciales/cabecera1.inc.php';
include '../parciales/cabecera2.inc.php';
if (isset($_SESSION['usr']) && $_SESSION['rol']=='R01'){
		include 'cuerpo.inc.php';
	}else{
		header('http://localhost/PrimerParcial324/');
	}
include '../parciales/footer1.inc.php';
include '../parciales/footer2.inc.php'; 
?>
?>