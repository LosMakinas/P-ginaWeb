<?php

    session_start();
    $id = $_GET['idUsuario'];
 
    include 'bbdd.php';

    session_destroy();
    $borrarDatos = eliminarDatosUsuario($id);

    if($borrarDatos){
        $funciona = eliminarUsuario($id);
    }
    
    header("location: login.php");

  

?>