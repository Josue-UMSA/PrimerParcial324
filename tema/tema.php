<?php
session_start();
include "../sql/conexion.inc.php";
if (isset($_POST['temaOp'])) {
	$sql="update usuario set tema=";
	switch ($_POST['temaOp']) {
		case '1':
			$sql.="1";
			$_SESSION['tema']=1;
			break;
		case '2':
			$sql.="2";
			$_SESSION['tema']=2;
			break;
		case '3':
			$sql.="3";
			$_SESSION['tema']=3;
			break;	
		default:
			$sql.="0";
			$_SESSION['tema']=0;
			break;
	}
	echo mysqli_query($con, $sql." where usuario = '".$_SESSION['usr']."'");
}else{
  header('Location: http://localhost/PrimerParcial324/index.php');
}
 
?>