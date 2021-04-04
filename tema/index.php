<?php 
include '../parciales/cabecera1.inc.php';
include '../parciales/cabecera2.inc.php';
if (isset($_SESSION['usr'])):
	include 'cuerpo.inc.php';
	include '../parciales/footer1.inc.php';
?>
	<script src="../js/tema.js"></script>
<?php else: 
	header('http://localhost/PrimerParcial324/');
	 endif; 
	 include '../parciales/footer2.inc.php'; 
?>