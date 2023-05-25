<?php

    session_start();
    $id = $_GET['idUsuario'];
 
    include 'bbdd.php';

    if(empty($_SESSION['usuario']))
    {
                                                              
        header('location: login.php');
                                                              
    }

    session_destroy();
    $borrarDatos = eliminarDatosUsuario($id);

    if($borrarDatos){
        $funciona = eliminarUsuario($id);
    }
    
    header("location: index.php");

  

?>