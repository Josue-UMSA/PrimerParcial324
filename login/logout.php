<?php
session_start();
if(isset($_POST['op'])){
    session_destroy();
    header('Location: http://localhost/PrimerParcial324/index.php');
}
header('Location: http://localhost/PrimerParcial324/index.php');
?>