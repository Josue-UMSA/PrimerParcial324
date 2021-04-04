<?php
session_start();
include "conexion.inc.php";
if (isset($_POST['login'])) {
 
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    

    $resultado = mysqli_query($con, "select * from Usuario where usuario='".$usuario."'");
    $usr = mysqli_fetch_array($resultado);
    $res=array(0=>'',1=>false);
    if (!$usr[1]) {
        $res[0]='<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>¡Credenciales no validas!</strong>.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
        $res[1]=false;
    } else {
        if ($password == $usr[2]) {
            $_SESSION['ci'] = $usr[0];
            $_SESSION['usr'] = $usr[1];
            $_SESSION['rol'] = $usr[3];
            $_SESSION['tema'] = $usr[4];
            $res[0]='<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>¡Perfecto!</strong>.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>';
            $res[1]=true;
        } else {
            $res[0]='<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>¡Contraseña Incorrecta!</strong>.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
             $res[1]=false;
        }
    }
    echo json_encode($res);
}else{
  header('Location: http://localhost/PrimerParcial324/index.php');
}
 
?>