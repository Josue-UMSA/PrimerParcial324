<?php 
include '../parciales/cabecera1.inc.php';
include '../parciales/cabecera2.inc.php';
if (!isset($_SESSION['usr'])){
	include 'cuerpo.inc.php';
	include '../parciales/footer1.inc.php';
?>
	<script src="login.js"></script>
<?php }else{
	 header('http://localhost/PrimerParcial324/index.php');
	 }
	 include '../parciales/footer2.inc.php'; 
?>