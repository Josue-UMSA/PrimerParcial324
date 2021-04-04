<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Primer Parcial INF 324</title>
		<link rel="icon" href="http://localhost/PrimerParcial324/imagenes/fcpn.png" sizes="192x192">
		<link href="http://localhost/PrimerParcial324/fontawesome/css/all.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="http://localhost/PrimerParcial324/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/PrimerParcial324/css/formularios.css">

		<?php session_start(); 
		?>
		<style type="text/css">
			body{
				<?php
					$t=0; 
					if (isset($_SESSION['tema'])){ 
					$t=$_SESSION['tema'];
				} ?>
				background-color:<?=($t==0)?'#EFE9E9':(($t==1)?'#E4D2FF':(($t==2)?'#FFE1C1':('#D6FFF4')))?>;
			}
		</style>

